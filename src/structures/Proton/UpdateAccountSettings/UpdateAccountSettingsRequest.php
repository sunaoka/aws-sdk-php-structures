<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $deletePipelineProvisioningRepository
 * @property string $pipelineCodebuildRoleArn
 * @property Shapes\RepositoryBranchInput $pipelineProvisioningRepository
 * @property string $pipelineServiceRoleArn
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{
     *     deletePipelineProvisioningRepository?: bool,
     *     pipelineCodebuildRoleArn?: string,
     *     pipelineProvisioningRepository?: Shapes\RepositoryBranchInput,
     *     pipelineServiceRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
