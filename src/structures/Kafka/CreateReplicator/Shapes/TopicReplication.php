<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $CopyAccessControlListsForTopics
 * @property bool $CopyTopicConfigurations
 * @property bool $DetectAndCopyNewTopics
 * @property ReplicationStartingPosition $StartingPosition
 * @property ReplicationTopicNameConfiguration $TopicNameConfiguration
 * @property list<string> $TopicsToExclude
 * @property list<string> $TopicsToReplicate
 */
class TopicReplication extends Shape
{
    /**
     * @param array{
     *     CopyAccessControlListsForTopics?: bool,
     *     CopyTopicConfigurations?: bool,
     *     DetectAndCopyNewTopics?: bool,
     *     StartingPosition?: ReplicationStartingPosition,
     *     TopicNameConfiguration?: ReplicationTopicNameConfiguration,
     *     TopicsToExclude?: list<string>,
     *     TopicsToReplicate: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
