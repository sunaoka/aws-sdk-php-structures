<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string|null $alias
 * @property string|null $unit
 * @property PropertyNotification|null $notification
 * @property string|null $assetCompositeModelId
 * @property list<AssetPropertyPathSegment>|null $path
 * @property string|null $externalId
 */
class AssetPropertySummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     alias?: string|null,
     *     unit?: string|null,
     *     notification?: PropertyNotification|null,
     *     assetCompositeModelId?: string|null,
     *     path?: list<AssetPropertyPathSegment>|null,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
