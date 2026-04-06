<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteAssetModelCompositeModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $assetModelCompositeModelId
 * @property string|null $clientToken
 */
class DeleteAssetModelCompositeModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     assetModelCompositeModelId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
