<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RACK_MAXIMUM'|'RACK_MAX_POWER_KVA'|'RACK_MAX_WEIGHT_LBS'|'RACK_SPACE_CONSTRAINED'|null $QuoteConstraintType
 * @property string|null $Value
 */
class QuoteConstraint extends Shape
{
    /**
     * @param array{
     *     QuoteConstraintType?: 'RACK_MAXIMUM'|'RACK_MAX_POWER_KVA'|'RACK_MAX_WEIGHT_LBS'|'RACK_SPACE_CONSTRAINED'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
