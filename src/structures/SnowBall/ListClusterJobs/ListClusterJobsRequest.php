<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListClusterJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property int<0, 100> $MaxResults
 * @property string $NextToken
 */
class ListClusterJobsRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     MaxResults?: int<0, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
