<?php

namespace Sunaoka\Aws\Structures\Proton\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $codebuildRoleArn
 * @property string|null $componentRoleArn
 * @property string|null $description
 * @property string|null $environmentAccountConnectionId
 * @property string $name
 * @property string|null $protonServiceRoleArn
 * @property Shapes\RepositoryBranchInput|null $provisioningRepository
 * @property string $spec
 * @property list<Shapes\Tag>|null $tags
 * @property string $templateMajorVersion
 * @property string|null $templateMinorVersion
 * @property string $templateName
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     codebuildRoleArn?: string|null,
     *     componentRoleArn?: string|null,
     *     description?: string|null,
     *     environmentAccountConnectionId?: string|null,
     *     name: string,
     *     protonServiceRoleArn?: string|null,
     *     provisioningRepository?: Shapes\RepositoryBranchInput|null,
     *     spec: string,
     *     tags?: list<Shapes\Tag>|null,
     *     templateMajorVersion: string,
     *     templateMinorVersion?: string|null,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
