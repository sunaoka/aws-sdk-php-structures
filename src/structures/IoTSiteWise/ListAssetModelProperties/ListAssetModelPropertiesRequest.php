<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 * @property 'ALL'|'BASE' $filter
 * @property string $assetModelVersion
 */
class ListAssetModelPropertiesRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>,
     *     filter?: 'ALL'|'BASE',
     *     assetModelVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
