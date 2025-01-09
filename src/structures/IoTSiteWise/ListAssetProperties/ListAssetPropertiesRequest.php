<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $nextToken
 * @property int $maxResults
 * @property 'ALL'|'BASE' $filter
 */
class ListAssetPropertiesRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     filter?: 'ALL'|'BASE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
