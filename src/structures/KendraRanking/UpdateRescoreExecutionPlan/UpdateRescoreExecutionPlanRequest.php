<?php

namespace Sunaoka\Aws\Structures\KendraRanking\UpdateRescoreExecutionPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\CapacityUnitsConfiguration|null $CapacityUnits
 */
class UpdateRescoreExecutionPlanRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     CapacityUnits?: Shapes\CapacityUnitsConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
