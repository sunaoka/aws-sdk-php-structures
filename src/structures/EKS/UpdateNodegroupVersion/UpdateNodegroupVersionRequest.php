<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $nodegroupName
 * @property string|null $version
 * @property string|null $releaseVersion
 * @property Shapes\LaunchTemplateSpecification|null $launchTemplate
 * @property bool|null $force
 * @property string|null $clientRequestToken
 */
class UpdateNodegroupVersionRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     nodegroupName: string,
     *     version?: string|null,
     *     releaseVersion?: string|null,
     *     launchTemplate?: Shapes\LaunchTemplateSpecification|null,
     *     force?: bool|null,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
