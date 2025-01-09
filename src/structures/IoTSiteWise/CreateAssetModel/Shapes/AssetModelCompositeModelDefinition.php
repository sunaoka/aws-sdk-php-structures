<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $externalId
 * @property string $name
 * @property string $description
 * @property string $type
 * @property list<AssetModelPropertyDefinition> $properties
 */
class AssetModelCompositeModelDefinition extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     externalId?: string,
     *     name: string,
     *     description?: string,
     *     type: string,
     *     properties?: list<AssetModelPropertyDefinition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
