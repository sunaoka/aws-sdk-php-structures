<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $clientToken
 */
class DeleteAssetRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
