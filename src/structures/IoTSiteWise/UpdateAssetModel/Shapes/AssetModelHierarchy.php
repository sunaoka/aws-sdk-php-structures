<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $externalId
 * @property string $name
 * @property string $childAssetModelId
 */
class AssetModelHierarchy extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     externalId?: string|null,
     *     name: string,
     *     childAssetModelId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
