<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeEventTopics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 * @property string $TopicName
 * @property string $TopicArn
 * @property \Aws\Api\DateTimeResult $CreatedDateTime
 * @property 'Registered'|'Topic not found'|'Failed'|'Deleted' $Status
 */
class EventTopic extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     TopicName?: string,
     *     TopicArn?: string,
     *     CreatedDateTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'Registered'|'Topic not found'|'Failed'|'Deleted'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
