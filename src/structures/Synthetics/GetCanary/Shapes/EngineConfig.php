<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EngineArn
 * @property 'CHROME'|'FIREFOX'|null $BrowserType
 */
class EngineConfig extends Shape
{
    /**
     * @param array{
     *     EngineArn?: string|null,
     *     BrowserType?: 'CHROME'|'FIREFOX'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
