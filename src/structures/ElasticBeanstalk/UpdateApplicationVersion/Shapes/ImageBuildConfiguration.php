<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'docker'|'buildpack'|null $Type
 * @property string|null $DockerfileLocation
 * @property string|null $Buildpack
 * @property 'amd64'|'arm64'|null $Architecture
 * @property string|null $CodeBuildServiceRole
 * @property 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|null $ComputeType
 * @property int|null $TimeoutInMinutes
 */
class ImageBuildConfiguration extends Shape
{
    /**
     * @param array{
     *     Type?: 'docker'|'buildpack'|null,
     *     DockerfileLocation?: string|null,
     *     Buildpack?: string|null,
     *     Architecture?: 'amd64'|'arm64'|null,
     *     CodeBuildServiceRole?: string|null,
     *     ComputeType?: 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|null,
     *     TimeoutInMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
