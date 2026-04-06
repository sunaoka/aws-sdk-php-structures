<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteAssetModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string|null $clientToken
 */
class DeleteAssetModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
