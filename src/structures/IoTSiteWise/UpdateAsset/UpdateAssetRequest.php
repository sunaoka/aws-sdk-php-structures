<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string|null $assetExternalId
 * @property string $assetName
 * @property string|null $clientToken
 * @property string|null $assetDescription
 */
class UpdateAssetRequest extends Request
{
    /**
     * @param array{
     *     assetId: string,
     *     assetExternalId?: string|null,
     *     assetName: string,
     *     clientToken?: string|null,
     *     assetDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
