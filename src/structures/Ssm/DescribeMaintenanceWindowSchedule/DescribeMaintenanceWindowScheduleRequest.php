<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property list<Shapes\Target> $Targets
 * @property 'INSTANCE'|'RESOURCE_GROUP' $ResourceType
 * @property list<Shapes\PatchOrchestratorFilter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeMaintenanceWindowScheduleRequest extends Request
{
    /**
     * @param array{
     *     WindowId?: string,
     *     Targets?: list<Shapes\Target>,
     *     ResourceType?: 'INSTANCE'|'RESOURCE_GROUP',
     *     Filters?: list<Shapes\PatchOrchestratorFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
