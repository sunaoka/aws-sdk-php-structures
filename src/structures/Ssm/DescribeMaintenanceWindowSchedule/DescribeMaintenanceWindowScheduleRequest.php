<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $WindowId
 * @property list<Shapes\Target>|null $Targets
 * @property 'INSTANCE'|'RESOURCE_GROUP'|null $ResourceType
 * @property list<Shapes\PatchOrchestratorFilter>|null $Filters
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeMaintenanceWindowScheduleRequest extends Request
{
    /**
     * @param array{
     *     WindowId?: string|null,
     *     Targets?: list<Shapes\Target>|null,
     *     ResourceType?: 'INSTANCE'|'RESOURCE_GROUP'|null,
     *     Filters?: list<Shapes\PatchOrchestratorFilter>|null,
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
