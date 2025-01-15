<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property string|null $assetModelId
 * @property 'ALL'|'TOP_LEVEL'|null $filter
 */
class ListAssetsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     assetModelId?: string|null,
     *     filter?: 'ALL'|'TOP_LEVEL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
