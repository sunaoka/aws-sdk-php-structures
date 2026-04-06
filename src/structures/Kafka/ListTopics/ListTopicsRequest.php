<?php

namespace Sunaoka\Aws\Structures\Kafka\ListTopics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $TopicNameFilter
 */
class ListTopicsRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     TopicNameFilter?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
