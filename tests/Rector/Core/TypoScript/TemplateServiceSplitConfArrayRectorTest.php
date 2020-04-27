<?php

declare(strict_types=1);

namespace Ssch\TYPO3Rector\Tests\Rector\Core\TypoScript;

use Iterator;
use Ssch\TYPO3Rector\Tests\AbstractRectorWithConfigTestCase;

class TemplateServiceSplitConfArrayRectorTest extends AbstractRectorWithConfigTestCase
{
    /**
     * @dataProvider provideDataForTest()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideDataForTest(): Iterator
    {
        yield [__DIR__ . '/Fixture/template_service_split_conf_array.php.inc'];
    }
}
