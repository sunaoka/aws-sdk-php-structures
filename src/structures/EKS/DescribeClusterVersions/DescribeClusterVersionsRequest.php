<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterType
 * @property int $maxResults
 * @property string $nextToken
 * @property bool $defaultOnly
 * @property bool $includeAll
 * @property list<string> $clusterVersions
 * @property 'unsupported'|'standard-support'|'extended-support' $status
 */
class DescribeClusterVersionsRequest extends Request
{
    /**
     * @param array{
     *     clusterType?: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     defaultOnly?: bool,
     *     includeAll?: bool,
     *     clusterVersions?: list<string>,
     *     status?: 'unsupported'|'standard-support'|'extended-support'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
