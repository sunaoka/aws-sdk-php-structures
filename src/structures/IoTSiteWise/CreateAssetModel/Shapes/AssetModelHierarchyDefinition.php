<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $childAssetModelId
 * @property string|null $id
 * @property string|null $externalId
 */
class AssetModelHierarchyDefinition extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     childAssetModelId: string,
     *     id?: string|null,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
