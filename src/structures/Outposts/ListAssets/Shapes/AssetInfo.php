<?php

namespace Sunaoka\Aws\Structures\Outposts\ListAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssetId
 * @property string $RackId
 * @property 'COMPUTE' $AssetType
 * @property ComputeAttributes $ComputeAttributes
 * @property AssetLocation $AssetLocation
 */
class AssetInfo extends Shape
{
    /**
     * @param array{
     *     AssetId?: string,
     *     RackId?: string,
     *     AssetType?: 'COMPUTE',
     *     ComputeAttributes?: ComputeAttributes,
     *     AssetLocation?: AssetLocation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
