<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ArtifactName
 * @property string $CodeBuildServiceRole
 * @property 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|null $ComputeType
 * @property string $Image
 * @property int|null $TimeoutInMinutes
 */
class BuildConfiguration extends Shape
{
    /**
     * @param array{
     *     ArtifactName?: string|null,
     *     CodeBuildServiceRole: string,
     *     ComputeType?: 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|null,
     *     Image: string,
     *     TimeoutInMinutes?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
