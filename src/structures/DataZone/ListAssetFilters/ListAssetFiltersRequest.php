<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAssetFilters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $assetIdentifier
 * @property 'VALID'|'INVALID'|null $status
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListAssetFiltersRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     assetIdentifier: string,
     *     status?: 'VALID'|'INVALID'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
