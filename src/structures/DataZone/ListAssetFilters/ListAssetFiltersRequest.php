<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAssetFilters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetIdentifier
 * @property string $domainIdentifier
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 * @property 'VALID'|'INVALID' $status
 */
class ListAssetFiltersRequest extends Request
{
    /**
     * @param array{
     *     assetIdentifier: string,
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string,
     *     status?: 'VALID'|'INVALID'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
