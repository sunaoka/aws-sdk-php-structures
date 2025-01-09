<?php

namespace Sunaoka\Aws\Structures\KendraRanking\CreateRescoreExecutionPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property Shapes\CapacityUnitsConfiguration $CapacityUnits
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 */
class CreateRescoreExecutionPlanRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     CapacityUnits?: Shapes\CapacityUnitsConfiguration,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
