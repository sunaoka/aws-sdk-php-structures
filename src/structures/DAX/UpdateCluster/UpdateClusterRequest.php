<?php

namespace Sunaoka\Aws\Structures\DAX\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string|null $Description
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $NotificationTopicArn
 * @property string|null $NotificationTopicStatus
 * @property string|null $ParameterGroupName
 * @property list<string>|null $SecurityGroupIds
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     Description?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     NotificationTopicArn?: string|null,
     *     NotificationTopicStatus?: string|null,
     *     ParameterGroupName?: string|null,
     *     SecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
