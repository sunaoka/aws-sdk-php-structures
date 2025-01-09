<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100> $MaxResults
 * @property string $NextToken
 */
class ListClustersRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
