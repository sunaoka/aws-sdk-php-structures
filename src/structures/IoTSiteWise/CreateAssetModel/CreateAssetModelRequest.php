<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelName
 * @property 'ASSET_MODEL'|'COMPONENT_MODEL' $assetModelType
 * @property string $assetModelId
 * @property string $assetModelExternalId
 * @property string $assetModelDescription
 * @property list<Shapes\AssetModelPropertyDefinition> $assetModelProperties
 * @property list<Shapes\AssetModelHierarchyDefinition> $assetModelHierarchies
 * @property list<Shapes\AssetModelCompositeModelDefinition> $assetModelCompositeModels
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateAssetModelRequest extends Request
{
    /**
     * @param array{
     *     assetModelName: string,
     *     assetModelType?: 'ASSET_MODEL'|'COMPONENT_MODEL',
     *     assetModelId?: string,
     *     assetModelExternalId?: string,
     *     assetModelDescription?: string,
     *     assetModelProperties?: list<Shapes\AssetModelPropertyDefinition>,
     *     assetModelHierarchies?: list<Shapes\AssetModelHierarchyDefinition>,
     *     assetModelCompositeModels?: list<Shapes\AssetModelCompositeModelDefinition>,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
