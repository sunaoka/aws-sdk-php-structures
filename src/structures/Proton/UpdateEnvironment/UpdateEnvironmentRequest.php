<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $codebuildRoleArn
 * @property string $componentRoleArn
 * @property 'NONE'|'CURRENT_VERSION'|'MINOR_VERSION'|'MAJOR_VERSION' $deploymentType
 * @property string $description
 * @property string $environmentAccountConnectionId
 * @property string $name
 * @property string $protonServiceRoleArn
 * @property Shapes\RepositoryBranchInput $provisioningRepository
 * @property string $spec
 * @property string $templateMajorVersion
 * @property string $templateMinorVersion
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     codebuildRoleArn?: string,
     *     componentRoleArn?: string,
     *     deploymentType: 'NONE'|'CURRENT_VERSION'|'MINOR_VERSION'|'MAJOR_VERSION',
     *     description?: string,
     *     environmentAccountConnectionId?: string,
     *     name: string,
     *     protonServiceRoleArn?: string,
     *     provisioningRepository?: Shapes\RepositoryBranchInput,
     *     spec?: string,
     *     templateMajorVersion?: string,
     *     templateMinorVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
