<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModelCompositeModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $assetModelCompositeModelExternalId
 * @property string $parentAssetModelCompositeModelId
 * @property string $assetModelCompositeModelId
 * @property string $assetModelCompositeModelDescription
 * @property string $assetModelCompositeModelName
 * @property string $assetModelCompositeModelType
 * @property string $clientToken
 * @property string $composedAssetModelId
 * @property list<Shapes\AssetModelPropertyDefinition> $assetModelCompositeModelProperties
 * @property string $ifMatch
 * @property string $ifNoneMatch
 * @property 'LATEST'|'ACTIVE' $matchForVersionType
 */
class CreateAssetModelCompositeModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     assetModelCompositeModelExternalId?: string,
     *     parentAssetModelCompositeModelId?: string,
     *     assetModelCompositeModelId?: string,
     *     assetModelCompositeModelDescription?: string,
     *     assetModelCompositeModelName: string,
     *     assetModelCompositeModelType: string,
     *     clientToken?: string,
     *     composedAssetModelId?: string,
     *     assetModelCompositeModelProperties?: list<Shapes\AssetModelPropertyDefinition>,
     *     ifMatch?: string,
     *     ifNoneMatch?: string,
     *     matchForVersionType?: 'LATEST'|'ACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
