<h2>Dettaglio ordine n°<?=$ordine->getId()?> del <?=substr($ordine->getData(),0,10)?></h2>

    <table>

            <tr>
                <th class="esami-col-small">Pizza</th>
                <th class="esami-col-small">Dimensione</th>                
                <th class="esami-col-small">Quantita</th>
                <th class="esami-col-small">Prezzo</th>      
                <th class="esami-col-small">Prezzo TOT</th>                 
            </tr>     

    <?foreach ($POs as $PO) {
            $pizza = PizzaFactory::instance()->getPizzaPerId($PO->getPizza());?>
            <tr>
                <td><?= $pizza->getNome()?></td>
                <td><?= $PO->getDimensione() ?></td>
                <td><?= $PO->getQuantita() ?></td>                
                <td><?= $pizza->getPrezzo() ?></td>
                <td><?= Pizza_ordineFactory::instance()->getPrezzoSingolo($PO) ?></td>                               
                   
            </tr>
    <? } ?>    
             <tr>
                <th class="esami-col-small">Fascia oraria*</th>                  
                <th class="esami-col-small">Domicilio</th>
                <th class="esami-col-small">Prezzo Domicilio</th>                
                <th class="esami-col-small">Prezzo Pizze</th>
                <th class="esami-col-small">Prezzo Totale</th>                     
            </tr>       
            <tr>
                <td><?= OrdineFactory::instance()->getValoreOrario($ordine->getOrario()) ?></td>           
                <td><? if($ordine->getDomicilio() == "s"){?>si<? } else {?>no<? } ?></td>            
                <td><? if($ordine->getDomicilio() == "s"){?>1.5<? } else {?>0<? } ?></td>
                <td><?= Pizza_ordineFactory::instance()->getPrezzoParziale($ordine) ?></td>                 
                <td><?= OrdineFactory::instance()->getPrezzoTotale($ordine) ?></td>                 
            </tr>
    </table>


