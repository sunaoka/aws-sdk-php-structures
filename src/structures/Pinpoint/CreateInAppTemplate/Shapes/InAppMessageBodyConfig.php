<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateInAppTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LEFT'|'CENTER'|'RIGHT' $Alignment
 * @property string $Body
 * @property string $TextColor
 */
class InAppMessageBodyConfig extends Shape
{
    /**
     * @param array{
     *     Alignment: 'LEFT'|'CENTER'|'RIGHT',
     *     Body: string,
     *     TextColor: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
