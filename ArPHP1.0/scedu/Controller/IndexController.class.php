<?php
/**
 * Powerd by ArPHP.
 *
 * Controller.
 *
 * @author ycassnr <ycassnr@gmail.com>
 */



/**
 * Default Controller of webapp.
 */
class IndexController extends ArController {

    /**
     * just the example of get contents.
     *
     * @return void
     */
    public function indexAction()
    {
        $result = Ar::c('db.dbmysql')->read()->select()->table('t1')->queryAll();
        var_dump($result);

    }

}
