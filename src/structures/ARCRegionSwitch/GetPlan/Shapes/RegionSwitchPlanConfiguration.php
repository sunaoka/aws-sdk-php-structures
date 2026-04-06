<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $crossAccountRole
 * @property string|null $externalId
 * @property string $arn
 */
class RegionSwitchPlanConfiguration extends Shape
{
    /**
     * @param array{
     *     crossAccountRole?: string|null,
     *     externalId?: string|null,
     *     arn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
