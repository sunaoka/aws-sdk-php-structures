<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $dataSourceIdentifier
 * @property 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS'|null $status
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListDataSourceRunsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     dataSourceIdentifier: string,
     *     status?: 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
