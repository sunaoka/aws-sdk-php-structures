<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowsForTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Target> $Targets
 * @property 'INSTANCE'|'RESOURCE_GROUP' $ResourceType
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeMaintenanceWindowsForTargetRequest extends Request
{
    /**
     * @param array{
     *     Targets: list<Shapes\Target>,
     *     ResourceType: 'INSTANCE'|'RESOURCE_GROUP',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
