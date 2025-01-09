<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceIdentifier
 * @property string $domainIdentifier
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 * @property 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS' $status
 */
class ListDataSourceRunsRequest extends Request
{
    /**
     * @param array{
     *     dataSourceIdentifier: string,
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string,
     *     status?: 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
