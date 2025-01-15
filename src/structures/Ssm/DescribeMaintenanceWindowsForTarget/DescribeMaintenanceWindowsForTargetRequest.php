<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowsForTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Target> $Targets
 * @property 'INSTANCE'|'RESOURCE_GROUP' $ResourceType
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeMaintenanceWindowsForTargetRequest extends Request
{
    /**
     * @param array{
     *     Targets: list<Shapes\Target>,
     *     ResourceType: 'INSTANCE'|'RESOURCE_GROUP',
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
