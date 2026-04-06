<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $childAssetModelId
 */
class AssetModelHierarchyDefinition extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     childAssetModelId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
