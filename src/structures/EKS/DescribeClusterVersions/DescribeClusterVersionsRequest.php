<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clusterType
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property bool|null $defaultOnly
 * @property bool|null $includeAll
 * @property list<string>|null $clusterVersions
 * @property 'unsupported'|'standard-support'|'extended-support'|null $status
 * @property 'UNSUPPORTED'|'STANDARD_SUPPORT'|'EXTENDED_SUPPORT'|null $versionStatus
 */
class DescribeClusterVersionsRequest extends Request
{
    /**
     * @param array{
     *     clusterType?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     defaultOnly?: bool|null,
     *     includeAll?: bool|null,
     *     clusterVersions?: list<string>|null,
     *     status?: 'unsupported'|'standard-support'|'extended-support'|null,
     *     versionStatus?: 'UNSUPPORTED'|'STANDARD_SUPPORT'|'EXTENDED_SUPPORT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
