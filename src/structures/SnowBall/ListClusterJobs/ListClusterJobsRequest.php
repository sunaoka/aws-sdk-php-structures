<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListClusterJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListClusterJobsRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
