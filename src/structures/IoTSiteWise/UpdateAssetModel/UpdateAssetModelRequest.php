<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string|null $assetModelExternalId
 * @property string $assetModelName
 * @property string|null $assetModelDescription
 * @property list<Shapes\AssetModelProperty>|null $assetModelProperties
 * @property list<Shapes\AssetModelHierarchy>|null $assetModelHierarchies
 * @property list<Shapes\AssetModelCompositeModel>|null $assetModelCompositeModels
 * @property string|null $clientToken
 * @property string|null $ifMatch
 * @property string|null $ifNoneMatch
 * @property 'LATEST'|'ACTIVE'|null $matchForVersionType
 */
class UpdateAssetModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     assetModelExternalId?: string|null,
     *     assetModelName: string,
     *     assetModelDescription?: string|null,
     *     assetModelProperties?: list<Shapes\AssetModelProperty>|null,
     *     assetModelHierarchies?: list<Shapes\AssetModelHierarchy>|null,
     *     assetModelCompositeModels?: list<Shapes\AssetModelCompositeModel>|null,
     *     clientToken?: string|null,
     *     ifMatch?: string|null,
     *     ifNoneMatch?: string|null,
     *     matchForVersionType?: 'LATEST'|'ACTIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
