<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $alias
 * @property string|null $unit
 * @property PropertyNotification|null $notification
 * @property string|null $assetCompositeModelId
 */
class AssetPropertySummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     alias?: string|null,
     *     unit?: string|null,
     *     notification?: PropertyNotification|null,
     *     assetCompositeModelId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
