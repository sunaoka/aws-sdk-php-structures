<?php

namespace Sunaoka\Aws\Structures\Proton\GetAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineCodebuildRoleArn
 * @property RepositoryBranch $pipelineProvisioningRepository
 * @property string $pipelineServiceRoleArn
 */
class AccountSettings extends Shape
{
    /**
     * @param array{
     *     pipelineCodebuildRoleArn?: string,
     *     pipelineProvisioningRepository?: RepositoryBranch,
     *     pipelineServiceRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
