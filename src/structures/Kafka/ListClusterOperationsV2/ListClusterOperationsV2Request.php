<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperationsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListClusterOperationsV2Request extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
