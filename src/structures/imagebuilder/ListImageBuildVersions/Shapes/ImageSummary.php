<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageBuildVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property 'AMI'|'DOCKER'|null $type
 * @property string|null $version
 * @property 'Windows'|'Linux'|'macOS'|null $platform
 * @property string|null $osVersion
 * @property ImageState|null $state
 * @property string|null $owner
 * @property string|null $dateCreated
 * @property OutputResources|null $outputResources
 * @property array<string, string>|null $tags
 * @property 'USER_INITIATED'|'SCHEDULED'|'IMPORT'|'IMPORT_ISO'|null $buildType
 * @property 'AMAZON_MANAGED'|'AWS_MARKETPLACE'|'IMPORTED'|'CUSTOM'|null $imageSource
 * @property \Aws\Api\DateTimeResult|null $deprecationTime
 * @property string|null $lifecycleExecutionId
 */
class ImageSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     type?: 'AMI'|'DOCKER'|null,
     *     version?: string|null,
     *     platform?: 'Windows'|'Linux'|'macOS'|null,
     *     osVersion?: string|null,
     *     state?: ImageState|null,
     *     owner?: string|null,
     *     dateCreated?: string|null,
     *     outputResources?: OutputResources|null,
     *     tags?: array<string, string>|null,
     *     buildType?: 'USER_INITIATED'|'SCHEDULED'|'IMPORT'|'IMPORT_ISO'|null,
     *     imageSource?: 'AMAZON_MANAGED'|'AWS_MARKETPLACE'|'IMPORTED'|'CUSTOM'|null,
     *     deprecationTime?: \Aws\Api\DateTimeResult|null,
     *     lifecycleExecutionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
