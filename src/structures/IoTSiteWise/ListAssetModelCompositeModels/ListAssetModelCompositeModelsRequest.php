<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelCompositeModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $nextToken
 * @property int $maxResults
 * @property string $assetModelVersion
 */
class ListAssetModelCompositeModelsRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     assetModelVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
