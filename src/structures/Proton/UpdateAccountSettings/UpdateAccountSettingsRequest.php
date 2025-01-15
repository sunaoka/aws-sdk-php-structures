<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $deletePipelineProvisioningRepository
 * @property string|null $pipelineCodebuildRoleArn
 * @property Shapes\RepositoryBranchInput|null $pipelineProvisioningRepository
 * @property string|null $pipelineServiceRoleArn
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{
     *     deletePipelineProvisioningRepository?: bool|null,
     *     pipelineCodebuildRoleArn?: string|null,
     *     pipelineProvisioningRepository?: Shapes\RepositoryBranchInput|null,
     *     pipelineServiceRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
