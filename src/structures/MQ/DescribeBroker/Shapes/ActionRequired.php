<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionRequiredCode
 * @property string $ActionRequiredInfo
 */
class ActionRequired extends Shape
{
    /**
     * @param array{
     *     ActionRequiredCode?: string,
     *     ActionRequiredInfo?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
