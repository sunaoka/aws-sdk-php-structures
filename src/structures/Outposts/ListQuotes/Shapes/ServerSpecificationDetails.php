<?php

namespace Sunaoka\Aws\Structures\Outposts\ListQuotes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $ServerPowerDrawKva
 * @property float|null $ServerWeightLbs
 * @property float|null $ServerHeightInches
 * @property float|null $ServerWidthInches
 * @property float|null $ServerDepthInches
 * @property 'HEIGHT_42U'|'HEIGHT_2U'|'HEIGHT_1U'|null $RackUnitHeight
 * @property list<EC2Capacity>|null $EC2Capacities
 */
class ServerSpecificationDetails extends Shape
{
    /**
     * @param array{
     *     ServerPowerDrawKva?: float|null,
     *     ServerWeightLbs?: float|null,
     *     ServerHeightInches?: float|null,
     *     ServerWidthInches?: float|null,
     *     ServerDepthInches?: float|null,
     *     RackUnitHeight?: 'HEIGHT_42U'|'HEIGHT_2U'|'HEIGHT_1U'|null,
     *     EC2Capacities?: list<EC2Capacity>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
