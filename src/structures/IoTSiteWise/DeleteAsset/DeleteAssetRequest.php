<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string|null $clientToken
 */
class DeleteAssetRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
