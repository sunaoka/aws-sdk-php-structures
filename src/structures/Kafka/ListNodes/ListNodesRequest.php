<?php

namespace Sunaoka\Aws\Structures\Kafka\ListNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListNodesRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
