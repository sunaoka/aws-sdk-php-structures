<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property 'ALL'|'BASE'|null $filter
 */
class ListAssetPropertiesRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     filter?: 'ALL'|'BASE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
