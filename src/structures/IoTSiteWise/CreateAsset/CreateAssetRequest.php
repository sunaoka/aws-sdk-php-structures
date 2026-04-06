<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetName
 * @property string $assetModelId
 * @property string|null $assetId
 * @property string|null $assetExternalId
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 * @property string|null $assetDescription
 */
class CreateAssetRequest extends Request
{
    /**
     * @param array{
     *     assetName: string,
     *     assetModelId: string,
     *     assetId?: string|null,
     *     assetExternalId?: string|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null,
     *     assetDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
