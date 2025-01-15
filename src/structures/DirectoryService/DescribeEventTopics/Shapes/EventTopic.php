<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeEventTopics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryId
 * @property string|null $TopicName
 * @property string|null $TopicArn
 * @property \Aws\Api\DateTimeResult|null $CreatedDateTime
 * @property 'Registered'|'Topic not found'|'Failed'|'Deleted'|null $Status
 */
class EventTopic extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     TopicName?: string|null,
     *     TopicArn?: string|null,
     *     CreatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'Registered'|'Topic not found'|'Failed'|'Deleted'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
