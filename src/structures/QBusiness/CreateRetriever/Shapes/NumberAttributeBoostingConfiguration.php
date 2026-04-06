<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH'|'ONE'|'TWO' $boostingLevel
 * @property 'PRIORITIZE_LARGER_VALUES'|'PRIORITIZE_SMALLER_VALUES'|null $boostingType
 */
class NumberAttributeBoostingConfiguration extends Shape
{
    /**
     * @param array{
     *     boostingLevel: 'NONE'|'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH'|'ONE'|'TWO',
     *     boostingType?: 'PRIORITIZE_LARGER_VALUES'|'PRIORITIZE_SMALLER_VALUES'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
