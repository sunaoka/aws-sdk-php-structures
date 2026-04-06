<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string|null $externalId
 * @property string $name
 * @property string $type
 * @property string $description
 * @property list<AssetCompositeModelPathSegment> $path
 */
class AssetCompositeModelSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     externalId?: string|null,
     *     name: string,
     *     type: string,
     *     description: string,
     *     path: list<AssetCompositeModelPathSegment>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
