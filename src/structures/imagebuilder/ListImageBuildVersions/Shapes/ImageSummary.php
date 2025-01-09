<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageBuildVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property 'AMI'|'DOCKER' $type
 * @property string $version
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property string $osVersion
 * @property ImageState $state
 * @property string $owner
 * @property string $dateCreated
 * @property OutputResources $outputResources
 * @property array<string, string> $tags
 * @property 'USER_INITIATED'|'SCHEDULED'|'IMPORT'|'IMPORT_ISO' $buildType
 * @property 'AMAZON_MANAGED'|'AWS_MARKETPLACE'|'IMPORTED'|'CUSTOM' $imageSource
 * @property \Aws\Api\DateTimeResult $deprecationTime
 * @property string $lifecycleExecutionId
 */
class ImageSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     type?: 'AMI'|'DOCKER',
     *     version?: string,
     *     platform?: 'Windows'|'Linux'|'macOS',
     *     osVersion?: string,
     *     state?: ImageState,
     *     owner?: string,
     *     dateCreated?: string,
     *     outputResources?: OutputResources,
     *     tags?: array<string, string>,
     *     buildType?: 'USER_INITIATED'|'SCHEDULED'|'IMPORT'|'IMPORT_ISO',
     *     imageSource?: 'AMAZON_MANAGED'|'AWS_MARKETPLACE'|'IMPORTED'|'CUSTOM',
     *     deprecationTime?: \Aws\Api\DateTimeResult,
     *     lifecycleExecutionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
