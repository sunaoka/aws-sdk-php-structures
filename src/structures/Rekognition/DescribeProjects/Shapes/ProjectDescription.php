<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectArn
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property 'CREATING'|'CREATED'|'DELETING' $Status
 * @property list<DatasetMetadata> $Datasets
 * @property 'CONTENT_MODERATION'|'CUSTOM_LABELS' $Feature
 * @property 'ENABLED'|'DISABLED' $AutoUpdate
 */
class ProjectDescription extends Shape
{
    /**
     * @param array{
     *     ProjectArn?: string,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     Status?: 'CREATING'|'CREATED'|'DELETING',
     *     Datasets?: list<DatasetMetadata>,
     *     Feature?: 'CONTENT_MODERATION'|'CUSTOM_LABELS',
     *     AutoUpdate?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
