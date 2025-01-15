<?php

namespace Sunaoka\Aws\Structures\DataZone\GetRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetTypesForRule|null $assetType
 * @property bool|null $dataProduct
 * @property ProjectsForRule|null $project
 */
class RuleScope extends Shape
{
    /**
     * @param array{
     *     assetType?: AssetTypesForRule|null,
     *     dataProduct?: bool|null,
     *     project?: ProjectsForRule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
