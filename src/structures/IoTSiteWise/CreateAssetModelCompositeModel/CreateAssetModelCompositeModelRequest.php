<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModelCompositeModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string|null $parentAssetModelCompositeModelId
 * @property string|null $assetModelCompositeModelExternalId
 * @property string|null $assetModelCompositeModelId
 * @property string|null $assetModelCompositeModelDescription
 * @property string $assetModelCompositeModelName
 * @property string $assetModelCompositeModelType
 * @property string|null $clientToken
 * @property string|null $composedAssetModelId
 * @property list<Shapes\AssetModelPropertyDefinition>|null $assetModelCompositeModelProperties
 */
class CreateAssetModelCompositeModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     parentAssetModelCompositeModelId?: string|null,
     *     assetModelCompositeModelExternalId?: string|null,
     *     assetModelCompositeModelId?: string|null,
     *     assetModelCompositeModelDescription?: string|null,
     *     assetModelCompositeModelName: string,
     *     assetModelCompositeModelType: string,
     *     clientToken?: string|null,
     *     composedAssetModelId?: string|null,
     *     assetModelCompositeModelProperties?: list<Shapes\AssetModelPropertyDefinition>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
