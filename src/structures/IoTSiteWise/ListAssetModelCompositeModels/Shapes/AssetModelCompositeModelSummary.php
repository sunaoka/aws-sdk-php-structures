<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelCompositeModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string|null $externalId
 * @property string $name
 * @property string $type
 * @property string|null $description
 * @property list<AssetModelCompositeModelPathSegment>|null $path
 */
class AssetModelCompositeModelSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     externalId?: string|null,
     *     name: string,
     *     type: string,
     *     description?: string|null,
     *     path?: list<AssetModelCompositeModelPathSegment>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
