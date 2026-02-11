<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateTopic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $TopicName
 * @property string|null $Configs
 * @property int|null $PartitionCount
 */
class UpdateTopicRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     TopicName: string,
     *     Configs?: string|null,
     *     PartitionCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
