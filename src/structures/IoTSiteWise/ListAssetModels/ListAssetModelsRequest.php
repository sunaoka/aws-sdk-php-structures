<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'ASSET_MODEL'|'COMPONENT_MODEL'|'INTERFACE'>|null $assetModelTypes
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property string|null $assetModelVersion
 */
class ListAssetModelsRequest extends Request
{
    /**
     * @param array{
     *     assetModelTypes?: list<'ASSET_MODEL'|'COMPONENT_MODEL'|'INTERFACE'>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     assetModelVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
