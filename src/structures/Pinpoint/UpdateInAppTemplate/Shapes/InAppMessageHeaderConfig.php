<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateInAppTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LEFT'|'CENTER'|'RIGHT' $Alignment
 * @property string $Header
 * @property string $TextColor
 */
class InAppMessageHeaderConfig extends Shape
{
    /**
     * @param array{
     *     Alignment: 'LEFT'|'CENTER'|'RIGHT',
     *     Header: string,
     *     TextColor: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
