<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NOW' $AnchorOption
 * @property string $ParameterName
 */
class AnchorDateConfiguration extends Shape
{
    /**
     * @param array{
     *     AnchorOption?: 'NOW',
     *     ParameterName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
