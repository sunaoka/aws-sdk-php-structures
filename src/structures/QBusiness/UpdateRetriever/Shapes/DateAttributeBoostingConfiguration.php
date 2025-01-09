<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH' $boostingLevel
 * @property int $boostingDurationInSeconds
 */
class DateAttributeBoostingConfiguration extends Shape
{
    /**
     * @param array{
     *     boostingLevel: 'NONE'|'LOW'|'MEDIUM'|'HIGH'|'VERY_HIGH',
     *     boostingDurationInSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
