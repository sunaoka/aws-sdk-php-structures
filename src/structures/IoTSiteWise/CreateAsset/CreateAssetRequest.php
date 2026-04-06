<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetName
 * @property string $assetModelId
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 * @property string|null $assetDescription
 * @property string|null $assetId
 * @property string|null $assetExternalId
 */
class CreateAssetRequest extends Request
{
    /**
     * @param array{
     *     assetName: string,
     *     assetModelId: string,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null,
     *     assetDescription?: string|null,
     *     assetId?: string|null,
     *     assetExternalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
