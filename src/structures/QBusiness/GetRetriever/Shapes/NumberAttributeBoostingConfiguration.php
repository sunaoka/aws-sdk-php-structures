<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH' $boostingLevel
 * @property 'PRIORITIZE_LARGER_VALUES'|'PRIORITIZE_SMALLER_VALUES' $boostingType
 */
class NumberAttributeBoostingConfiguration extends Shape
{
    /**
     * @param array{
     *     boostingLevel: 'NONE'|'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH',
     *     boostingType?: 'PRIORITIZE_LARGER_VALUES'|'PRIORITIZE_SMALLER_VALUES'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
