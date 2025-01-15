<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH' $boostingLevel
 * @property array<string, 'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH'>|null $attributeValueBoosting
 */
class StringAttributeBoostingConfiguration extends Shape
{
    /**
     * @param array{
     *     boostingLevel: 'NONE'|'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH',
     *     attributeValueBoosting?: array<string, 'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
