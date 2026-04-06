<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string $type
 * @property list<AssetModelProperty>|null $properties
 * @property string|null $id
 * @property string|null $externalId
 */
class AssetModelCompositeModel extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     type: string,
     *     properties?: list<AssetModelProperty>|null,
     *     id?: string|null,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
