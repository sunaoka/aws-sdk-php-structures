<?php

namespace Sunaoka\Aws\Structures\Proton\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $codebuildRoleArn
 * @property string $componentRoleArn
 * @property string $description
 * @property string $environmentAccountConnectionId
 * @property string $name
 * @property string $protonServiceRoleArn
 * @property Shapes\RepositoryBranchInput $provisioningRepository
 * @property string $spec
 * @property list<Shapes\Tag> $tags
 * @property string $templateMajorVersion
 * @property string $templateMinorVersion
 * @property string $templateName
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     codebuildRoleArn?: string,
     *     componentRoleArn?: string,
     *     description?: string,
     *     environmentAccountConnectionId?: string,
     *     name: string,
     *     protonServiceRoleArn?: string,
     *     provisioningRepository?: Shapes\RepositoryBranchInput,
     *     spec: string,
     *     tags?: list<Shapes\Tag>,
     *     templateMajorVersion: string,
     *     templateMinorVersion?: string,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
