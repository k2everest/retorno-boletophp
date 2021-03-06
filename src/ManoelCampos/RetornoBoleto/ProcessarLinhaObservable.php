<?php

namespace ManoelCampos\RetornoBoleto;

/**
 * Interface para implementar um objeto observável do padrão Observer. 
 * Objetos que implemtam esta interface notificarão objetos que implementam
 * a interface @see ProcessaLinhaObserver sempre que uma linha
 * for lida de um arquivo de retorno sendo processado.
 * 
 * @license <a href="https://opensource.org/licenses/MIT">MIT License</a>
 * @author <a href="http://manoelcampos.com/contact">Manoel Campos da Silva Filho</a>
 * @version 1.1
 */
interface ProcessaLinhaObservable {
    /**
     * Método a ser chamado cada vez que uma linha do arquivo de retorno
     * sendo processado for lida. Tal método deve notificar os objetos
     * que implementam a interface @see ProcessaLinhaObserver
     * que uma linha foi lida do arquivo.
     * 
     * @param LinhaArquivo $linha objeto contendo os dados da linha lida do arquivo.
     */
    public function notifyObserver(LinhaArquivo $linha);
}