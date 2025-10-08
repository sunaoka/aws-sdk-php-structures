<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutAssetModelInterfaceRelationship;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetModelId
 * @property string $interfaceAssetModelId
 * @property Shapes\PropertyMappingConfiguration $propertyMappingConfiguration
 * @property string|null $clientToken
 */
class PutAssetModelInterfaceRelationshipRequest extends Request
{
    /**
     * @param array{
     *     assetModelId: string,
     *     interfaceAssetModelId: string,
     *     propertyMappingConfiguration: Shapes\PropertyMappingConfiguration,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
