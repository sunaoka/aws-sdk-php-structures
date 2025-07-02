<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH'|'ONE'|'TWO' $boostingLevel
 * @property array<string, 'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH'|'ONE'|'TWO'|'THREE'|'FOUR'|'FIVE'>|null $attributeValueBoosting
 */
class StringAttributeBoostingConfiguration extends Shape
{
    /**
     * @param array{
     *     boostingLevel: 'NONE'|'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH'|'ONE'|'TWO',
     *     attributeValueBoosting?: array<string, 'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH'|'ONE'|'TWO'|'THREE'|'FOUR'|'FIVE'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
