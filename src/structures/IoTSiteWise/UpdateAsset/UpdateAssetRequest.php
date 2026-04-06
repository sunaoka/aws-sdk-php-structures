<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $assetName
 * @property string|null $clientToken
 * @property string|null $assetDescription
 * @property string|null $assetExternalId
 */
class UpdateAssetRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     assetName: string,
     *     clientToken?: string|null,
     *     assetDescription?: string|null,
     *     assetExternalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
