<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetModelCompositeModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $assetModelCompositeModelId
 * @property string $assetModelCompositeModelExternalId
 * @property string $assetModelCompositeModelDescription
 * @property string $assetModelCompositeModelName
 * @property string $clientToken
 * @property list<Shapes\AssetModelProperty> $assetModelCompositeModelProperties
 * @property string $ifMatch
 * @property string $ifNoneMatch
 * @property 'LATEST'|'ACTIVE' $matchForVersionType
 */
class UpdateAssetModelCompositeModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     assetModelCompositeModelId: string,
     *     assetModelCompositeModelExternalId?: string,
     *     assetModelCompositeModelDescription?: string,
     *     assetModelCompositeModelName: string,
     *     clientToken?: string,
     *     assetModelCompositeModelProperties?: list<Shapes\AssetModelProperty>,
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
