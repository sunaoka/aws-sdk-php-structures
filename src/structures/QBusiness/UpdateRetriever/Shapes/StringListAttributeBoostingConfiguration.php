<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH'|'ONE'|'TWO' $boostingLevel
 */
class StringListAttributeBoostingConfiguration extends Shape
{
    /**
     * @param array{boostingLevel: 'NONE'|'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH'|'ONE'|'TWO'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
