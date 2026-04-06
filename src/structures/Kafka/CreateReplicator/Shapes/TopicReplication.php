<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $CopyAccessControlListsForTopics
 * @property bool|null $CopyTopicConfigurations
 * @property bool|null $DetectAndCopyNewTopics
 * @property ReplicationStartingPosition|null $StartingPosition
 * @property ReplicationTopicNameConfiguration|null $TopicNameConfiguration
 * @property list<string>|null $TopicsToExclude
 * @property list<string> $TopicsToReplicate
 */
class TopicReplication extends Shape
{
    /**
     * @param array{
     *     CopyAccessControlListsForTopics?: bool|null,
     *     CopyTopicConfigurations?: bool|null,
     *     DetectAndCopyNewTopics?: bool|null,
     *     StartingPosition?: ReplicationStartingPosition|null,
     *     TopicNameConfiguration?: ReplicationTopicNameConfiguration|null,
     *     TopicsToExclude?: list<string>|null,
     *     TopicsToReplicate: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
