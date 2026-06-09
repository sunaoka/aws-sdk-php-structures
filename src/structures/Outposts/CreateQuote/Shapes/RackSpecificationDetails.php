<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RackId
 * @property 'NETWORKING'|'COMPUTE'|null $RackUse
 * @property float|null $RackPowerDrawKva
 * @property float|null $RackWeightLbs
 * @property float|null $RackHeightInches
 * @property float|null $RackWidthInches
 * @property float|null $RackDepthInches
 * @property 'HEIGHT_42U'|'HEIGHT_2U'|'HEIGHT_1U'|null $RackUnitHeight
 * @property list<EC2Capacity>|null $EC2Capacities
 */
class RackSpecificationDetails extends Shape
{
    /**
     * @param array{
     *     RackId?: string|null,
     *     RackUse?: 'NETWORKING'|'COMPUTE'|null,
     *     RackPowerDrawKva?: float|null,
     *     RackWeightLbs?: float|null,
     *     RackHeightInches?: float|null,
     *     RackWidthInches?: float|null,
     *     RackDepthInches?: float|null,
     *     RackUnitHeight?: 'HEIGHT_42U'|'HEIGHT_2U'|'HEIGHT_1U'|null,
     *     EC2Capacities?: list<EC2Capacity>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
