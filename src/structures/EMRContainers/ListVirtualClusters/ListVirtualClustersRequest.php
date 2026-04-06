<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListVirtualClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $containerProviderId
 * @property 'EKS'|null $containerProviderType
 * @property \Aws\Api\DateTimeResult|null $createdAfter
 * @property \Aws\Api\DateTimeResult|null $createdBefore
 * @property list<'RUNNING'|'TERMINATING'|'TERMINATED'|'ARRESTED'>|null $states
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property bool|null $eksAccessEntryIntegrated
 */
class ListVirtualClustersRequest extends Request
{
    /**
     * @param array{
     *     containerProviderId?: string|null,
     *     containerProviderType?: 'EKS'|null,
     *     createdAfter?: \Aws\Api\DateTimeResult|null,
     *     createdBefore?: \Aws\Api\DateTimeResult|null,
     *     states?: list<'RUNNING'|'TERMINATING'|'TERMINATED'|'ARRESTED'>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     eksAccessEntryIntegrated?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
