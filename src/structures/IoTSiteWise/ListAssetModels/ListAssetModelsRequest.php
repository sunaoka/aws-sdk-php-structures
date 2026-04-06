<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property list<'ASSET_MODEL'|'COMPONENT_MODEL'>|null $assetModelTypes
 */
class ListAssetModelsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     assetModelTypes?: list<'ASSET_MODEL'|'COMPONENT_MODEL'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
