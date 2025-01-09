<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $externalId
 * @property string $name
 * @property string $type
 * @property string $description
 * @property list<AssetModelCompositeModelPathSegment> $path
 */
class AssetModelCompositeModelSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     externalId?: string,
     *     name: string,
     *     type: string,
     *     description?: string,
     *     path?: list<AssetModelCompositeModelPathSegment>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
