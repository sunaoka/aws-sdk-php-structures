<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActionRequiredCode
 * @property string|null $ActionRequiredInfo
 */
class ActionRequired extends Shape
{
    /**
     * @param array{
     *     ActionRequiredCode?: string|null,
     *     ActionRequiredInfo?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
