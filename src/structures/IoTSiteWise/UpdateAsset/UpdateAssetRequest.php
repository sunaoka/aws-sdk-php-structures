<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $assetName
 * @property string $clientToken
 * @property string $assetDescription
 * @property string $assetExternalId
 */
class UpdateAssetRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     assetName: string,
     *     clientToken?: string,
     *     assetDescription?: string,
     *     assetExternalId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
