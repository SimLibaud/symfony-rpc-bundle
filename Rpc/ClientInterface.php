<?php
/*
 * This file is part of the Symfony bundle Seven/Rpc.
 *
 * (c) Sergey Kolodyazhnyy <sergey.kolodyazhnyy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Seven\RpcBundle\Rpc;

interface ClientInterface
{

    /**
     * @param $methodName
     * @param $parameters
     * @return mixed
     */

    public function call($methodName, $parameters = array());

}
