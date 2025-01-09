<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $alias
 * @property string $unit
 * @property PropertyNotification $notification
 * @property string $assetCompositeModelId
 * @property list<AssetPropertyPathSegment> $path
 * @property string $externalId
 */
class AssetPropertySummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     alias?: string,
     *     unit?: string,
     *     notification?: PropertyNotification,
     *     assetCompositeModelId?: string,
     *     path?: list<AssetPropertyPathSegment>,
     *     externalId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
