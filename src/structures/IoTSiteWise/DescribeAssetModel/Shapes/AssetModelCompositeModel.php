<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property string $type
 * @property list<AssetModelProperty> $properties
 * @property string $id
 * @property string $externalId
 */
class AssetModelCompositeModel extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     type: string,
     *     properties?: list<AssetModelProperty>,
     *     id?: string,
     *     externalId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
