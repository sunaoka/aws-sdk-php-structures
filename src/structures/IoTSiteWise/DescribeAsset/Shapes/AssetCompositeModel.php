<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property string $type
 * @property list<AssetProperty> $properties
 * @property string $id
 * @property string $externalId
 */
class AssetCompositeModel extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     type: string,
     *     properties: list<AssetProperty>,
     *     id?: string,
     *     externalId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
