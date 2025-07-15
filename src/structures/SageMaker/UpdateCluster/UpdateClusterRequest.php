<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property list<Shapes\ClusterInstanceGroupSpecification>|null $InstanceGroups
 * @property list<Shapes\ClusterRestrictedInstanceGroupSpecification>|null $RestrictedInstanceGroups
 * @property 'Automatic'|'None'|null $NodeRecovery
 * @property list<string>|null $InstanceGroupsToDelete
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     InstanceGroups?: list<Shapes\ClusterInstanceGroupSpecification>|null,
     *     RestrictedInstanceGroups?: list<Shapes\ClusterRestrictedInstanceGroupSpecification>|null,
     *     NodeRecovery?: 'Automatic'|'None'|null,
     *     InstanceGroupsToDelete?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
