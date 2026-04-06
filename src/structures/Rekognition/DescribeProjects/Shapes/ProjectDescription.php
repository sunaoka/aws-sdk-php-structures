<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProjectArn
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property 'CREATING'|'CREATED'|'DELETING'|null $Status
 * @property list<DatasetMetadata>|null $Datasets
 * @property 'CONTENT_MODERATION'|'CUSTOM_LABELS'|null $Feature
 * @property 'ENABLED'|'DISABLED'|null $AutoUpdate
 */
class ProjectDescription extends Shape
{
    /**
     * @param array{
     *     ProjectArn?: string|null,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'CREATING'|'CREATED'|'DELETING'|null,
     *     Datasets?: list<DatasetMetadata>|null,
     *     Feature?: 'CONTENT_MODERATION'|'CUSTOM_LABELS'|null,
     *     AutoUpdate?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
