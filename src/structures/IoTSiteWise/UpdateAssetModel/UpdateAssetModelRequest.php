<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $assetModelExternalId
 * @property string $assetModelName
 * @property string $assetModelDescription
 * @property list<Shapes\AssetModelProperty> $assetModelProperties
 * @property list<Shapes\AssetModelHierarchy> $assetModelHierarchies
 * @property list<Shapes\AssetModelCompositeModel> $assetModelCompositeModels
 * @property string $clientToken
 * @property string $ifMatch
 * @property string $ifNoneMatch
 * @property 'LATEST'|'ACTIVE' $matchForVersionType
 */
class UpdateAssetModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     assetModelExternalId?: string,
     *     assetModelName: string,
     *     assetModelDescription?: string,
     *     assetModelProperties?: list<Shapes\AssetModelProperty>,
     *     assetModelHierarchies?: list<Shapes\AssetModelHierarchy>,
     *     assetModelCompositeModels?: list<Shapes\AssetModelCompositeModel>,
     *     clientToken?: string,
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
