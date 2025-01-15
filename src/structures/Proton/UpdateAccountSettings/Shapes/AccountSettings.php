<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pipelineCodebuildRoleArn
 * @property RepositoryBranch|null $pipelineProvisioningRepository
 * @property string|null $pipelineServiceRoleArn
 */
class AccountSettings extends Shape
{
    /**
     * @param array{
     *     pipelineCodebuildRoleArn?: string|null,
     *     pipelineProvisioningRepository?: RepositoryBranch|null,
     *     pipelineServiceRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
