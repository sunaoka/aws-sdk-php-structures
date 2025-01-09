<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListVirtualClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $containerProviderId
 * @property 'EKS' $containerProviderType
 * @property \Aws\Api\DateTimeResult $createdAfter
 * @property \Aws\Api\DateTimeResult $createdBefore
 * @property list<'RUNNING'|'TERMINATING'|'TERMINATED'|'ARRESTED'> $states
 * @property int $maxResults
 * @property string $nextToken
 * @property bool $eksAccessEntryIntegrated
 */
class ListVirtualClustersRequest extends Request
{
    /**
     * @param array{
     *     containerProviderId?: string,
     *     containerProviderType?: 'EKS',
     *     createdAfter?: \Aws\Api\DateTimeResult,
     *     createdBefore?: \Aws\Api\DateTimeResult,
     *     states?: list<'RUNNING'|'TERMINATING'|'TERMINATED'|'ARRESTED'>,
     *     maxResults?: int,
     *     nextToken?: string,
     *     eksAccessEntryIntegrated?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
