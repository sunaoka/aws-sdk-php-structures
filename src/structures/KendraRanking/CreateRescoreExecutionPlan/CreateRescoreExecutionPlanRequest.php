<?php

namespace Sunaoka\Aws\Structures\KendraRanking\CreateRescoreExecutionPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\CapacityUnitsConfiguration|null $CapacityUnits
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateRescoreExecutionPlanRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     CapacityUnits?: Shapes\CapacityUnitsConfiguration|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
