<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $codebuildRoleArn
 * @property string|null $componentRoleArn
 * @property 'NONE'|'CURRENT_VERSION'|'MINOR_VERSION'|'MAJOR_VERSION' $deploymentType
 * @property string|null $description
 * @property string|null $environmentAccountConnectionId
 * @property string $name
 * @property string|null $protonServiceRoleArn
 * @property Shapes\RepositoryBranchInput|null $provisioningRepository
 * @property string|null $spec
 * @property string|null $templateMajorVersion
 * @property string|null $templateMinorVersion
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     codebuildRoleArn?: string|null,
     *     componentRoleArn?: string|null,
     *     deploymentType: 'NONE'|'CURRENT_VERSION'|'MINOR_VERSION'|'MAJOR_VERSION',
     *     description?: string|null,
     *     environmentAccountConnectionId?: string|null,
     *     name: string,
     *     protonServiceRoleArn?: string|null,
     *     provisioningRepository?: Shapes\RepositoryBranchInput|null,
     *     spec?: string|null,
     *     templateMajorVersion?: string|null,
     *     templateMinorVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
