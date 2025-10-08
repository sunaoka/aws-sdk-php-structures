<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventId
 * @property string $ClusterName
 */
class DescribeClusterEventRequest extends Request
{
    /**
     * @param array{
     *     EventId: string,
     *     ClusterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
