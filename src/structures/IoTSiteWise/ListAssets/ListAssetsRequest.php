<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 * @property string $assetModelId
 * @property 'ALL'|'TOP_LEVEL' $filter
 */
class ListAssetsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 250>,
     *     assetModelId?: string,
     *     filter?: 'ALL'|'TOP_LEVEL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
