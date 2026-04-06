<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string $name
 * @property string $childAssetModelId
 * @property string|null $externalId
 */
class AssetModelHierarchy extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name: string,
     *     childAssetModelId: string,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
