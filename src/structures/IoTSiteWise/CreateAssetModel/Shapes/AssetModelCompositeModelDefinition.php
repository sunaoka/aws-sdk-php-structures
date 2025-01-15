<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $externalId
 * @property string $name
 * @property string|null $description
 * @property string $type
 * @property list<AssetModelPropertyDefinition>|null $properties
 */
class AssetModelCompositeModelDefinition extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     externalId?: string|null,
     *     name: string,
     *     description?: string|null,
     *     type: string,
     *     properties?: list<AssetModelPropertyDefinition>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
