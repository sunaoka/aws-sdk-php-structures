<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CHROME'|'FIREFOX'|null $BrowserType
 */
class BrowserConfig extends Shape
{
    /**
     * @param array{BrowserType?: 'CHROME'|'FIREFOX'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
