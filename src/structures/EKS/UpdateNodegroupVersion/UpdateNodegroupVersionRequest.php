<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $nodegroupName
 * @property string $version
 * @property string $releaseVersion
 * @property Shapes\LaunchTemplateSpecification $launchTemplate
 * @property bool $force
 * @property string $clientRequestToken
 */
class UpdateNodegroupVersionRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     nodegroupName: string,
     *     version?: string,
     *     releaseVersion?: string,
     *     launchTemplate?: Shapes\LaunchTemplateSpecification,
     *     force?: bool,
     *     clientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
