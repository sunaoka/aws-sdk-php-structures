<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePipelineImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property 'AMI'|'DOCKER'|null $type
 * @property string|null $version
 * @property 'Windows'|'Linux'|null $platform
 * @property string|null $osVersion
 * @property ImageState|null $state
 * @property string|null $owner
 * @property string|null $dateCreated
 * @property OutputResources|null $outputResources
 * @property array<string, string>|null $tags
 * @property 'USER_INITIATED'|'SCHEDULED'|'IMPORT'|null $buildType
 * @property 'AMAZON_MANAGED'|'AWS_MARKETPLACE'|'IMPORTED'|'CUSTOM'|null $imageSource
 */
class ImageSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     type?: 'AMI'|'DOCKER'|null,
     *     version?: string|null,
     *     platform?: 'Windows'|'Linux'|null,
     *     osVersion?: string|null,
     *     state?: ImageState|null,
     *     owner?: string|null,
     *     dateCreated?: string|null,
     *     outputResources?: OutputResources|null,
     *     tags?: array<string, string>|null,
     *     buildType?: 'USER_INITIATED'|'SCHEDULED'|'IMPORT'|null,
     *     imageSource?: 'AMAZON_MANAGED'|'AWS_MARKETPLACE'|'IMPORTED'|'CUSTOM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
