<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property 'ALL'|'BASE'|null $filter
 */
class ListAssetModelPropertiesRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
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
