<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ArtifactName
 * @property string $CodeBuildServiceRole
 * @property 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE' $ComputeType
 * @property string $Image
 * @property int $TimeoutInMinutes
 */
class BuildConfiguration extends Shape
{
    /**
     * @param array{
     *     ArtifactName?: string,
     *     CodeBuildServiceRole: string,
     *     ComputeType?: 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE',
     *     Image: string,
     *     TimeoutInMinutes?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
