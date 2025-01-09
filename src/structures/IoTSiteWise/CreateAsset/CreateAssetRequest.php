<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetName
 * @property string $assetModelId
 * @property string $clientToken
 * @property array<string, string> $tags
 * @property string $assetDescription
 * @property string $assetId
 * @property string $assetExternalId
 */
class CreateAssetRequest extends Request
{
    /**
     * @param array{
     *     assetName: string,
     *     assetModelId: string,
     *     clientToken?: string,
     *     tags?: array<string, string>,
     *     assetDescription?: string,
     *     assetId?: string,
     *     assetExternalId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
