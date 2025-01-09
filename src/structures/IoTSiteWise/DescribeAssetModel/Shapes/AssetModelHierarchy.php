<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $externalId
 * @property string $name
 * @property string $childAssetModelId
 */
class AssetModelHierarchy extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     externalId?: string,
     *     name: string,
     *     childAssetModelId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
