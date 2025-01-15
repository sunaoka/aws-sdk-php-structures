<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAssetFilters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetIdentifier
 * @property string $domainIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property 'VALID'|'INVALID'|null $status
 */
class ListAssetFiltersRequest extends Request
{
    /**
     * @param array{
     *     assetIdentifier: string,
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     status?: 'VALID'|'INVALID'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
