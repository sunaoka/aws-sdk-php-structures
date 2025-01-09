<?php

namespace Sunaoka\Aws\Structures\KendraRanking\UpdateRescoreExecutionPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property Shapes\CapacityUnitsConfiguration $CapacityUnits
 */
class UpdateRescoreExecutionPlanRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string,
     *     Description?: string,
     *     CapacityUnits?: Shapes\CapacityUnitsConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
