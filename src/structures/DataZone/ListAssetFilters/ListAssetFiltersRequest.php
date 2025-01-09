<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAssetFilters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetIdentifier
 * @property string $domainIdentifier
 * @property int $maxResults
 * @property string $nextToken
 * @property 'VALID'|'INVALID' $status
 */
class ListAssetFiltersRequest extends Request
{
    /**
     * @param array{
     *     assetIdentifier: string,
     *     domainIdentifier: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     status?: 'VALID'|'INVALID'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
