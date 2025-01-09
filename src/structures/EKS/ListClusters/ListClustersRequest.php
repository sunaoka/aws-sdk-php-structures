<?php

namespace Sunaoka\Aws\Structures\EKS\ListClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property list<string> $include
 */
class ListClustersRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     include?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
