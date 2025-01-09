<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'ASSET_MODEL'|'COMPONENT_MODEL'> $assetModelTypes
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 * @property string $assetModelVersion
 */
class ListAssetModelsRequest extends Request
{
    /**
     * @param array{
     *     assetModelTypes?: list<'ASSET_MODEL'|'COMPONENT_MODEL'>,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>,
     *     assetModelVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
