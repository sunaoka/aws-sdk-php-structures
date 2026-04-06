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
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
