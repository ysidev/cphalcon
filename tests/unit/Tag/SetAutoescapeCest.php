<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Tag;

use UnitTester;

/**
 * Class SetAutoescapeCest
 */
class SetAutoescapeCest
{
    /**
     * Tests Phalcon\Tag :: setAutoescape()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function tagSetAutoescape(UnitTester $I)
    {
        $I->wantToTest('Tag - setAutoescape()');
        $I->skipTest('Need implementation');
    }
}
