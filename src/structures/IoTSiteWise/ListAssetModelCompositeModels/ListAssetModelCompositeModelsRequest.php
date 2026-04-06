<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelCompositeModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property string|null $assetModelVersion
 */
class ListAssetModelCompositeModelsRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     assetModelVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
