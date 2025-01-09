<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelCompositeModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 * @property string $assetModelVersion
 */
class ListAssetModelCompositeModelsRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>,
     *     assetModelVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
