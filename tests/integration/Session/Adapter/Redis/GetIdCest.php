<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Session\Adapter\Redis;

use IntegrationTester;

class GetIdCest
{
    /**
     * Tests Phalcon\Session\Adapter\Redis :: getId()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function sessionAdapterRedisGetId(IntegrationTester $I)
    {
        $I->wantToTest("Session\Adapter\Redis - getId()");
        $I->skipTest("Need implementation");
    }
}