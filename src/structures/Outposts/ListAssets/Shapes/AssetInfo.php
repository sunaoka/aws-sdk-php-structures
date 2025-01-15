<?php

namespace Sunaoka\Aws\Structures\Outposts\ListAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssetId
 * @property string|null $RackId
 * @property 'COMPUTE'|null $AssetType
 * @property ComputeAttributes|null $ComputeAttributes
 * @property AssetLocation|null $AssetLocation
 */
class AssetInfo extends Shape
{
    /**
     * @param array{
     *     AssetId?: string|null,
     *     RackId?: string|null,
     *     AssetType?: 'COMPUTE'|null,
     *     ComputeAttributes?: ComputeAttributes|null,
     *     AssetLocation?: AssetLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
