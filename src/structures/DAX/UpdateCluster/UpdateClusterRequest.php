<?php

namespace Sunaoka\Aws\Structures\DAX\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string $Description
 * @property string $PreferredMaintenanceWindow
 * @property string $NotificationTopicArn
 * @property string $NotificationTopicStatus
 * @property string $ParameterGroupName
 * @property list<string> $SecurityGroupIds
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     Description?: string,
     *     PreferredMaintenanceWindow?: string,
     *     NotificationTopicArn?: string,
     *     NotificationTopicStatus?: string,
     *     ParameterGroupName?: string,
     *     SecurityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
