<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelName
 * @property string|null $assetModelDescription
 * @property list<Shapes\AssetModelPropertyDefinition>|null $assetModelProperties
 * @property list<Shapes\AssetModelHierarchyDefinition>|null $assetModelHierarchies
 * @property list<Shapes\AssetModelCompositeModelDefinition>|null $assetModelCompositeModels
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 * @property string|null $assetModelId
 * @property string|null $assetModelExternalId
 * @property 'ASSET_MODEL'|'COMPONENT_MODEL'|null $assetModelType
 */
class CreateAssetModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelName: string,
     *     assetModelDescription?: string|null,
     *     assetModelProperties?: list<Shapes\AssetModelPropertyDefinition>|null,
     *     assetModelHierarchies?: list<Shapes\AssetModelHierarchyDefinition>|null,
     *     assetModelCompositeModels?: list<Shapes\AssetModelCompositeModelDefinition>|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null,
     *     assetModelId?: string|null,
     *     assetModelExternalId?: string|null,
     *     assetModelType?: 'ASSET_MODEL'|'COMPONENT_MODEL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
