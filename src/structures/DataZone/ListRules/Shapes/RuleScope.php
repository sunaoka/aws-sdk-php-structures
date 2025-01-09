<?php

namespace Sunaoka\Aws\Structures\DataZone\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetTypesForRule $assetType
 * @property bool $dataProduct
 * @property ProjectsForRule $project
 */
class RuleScope extends Shape
{
    /**
     * @param array{
     *     assetType?: AssetTypesForRule,
     *     dataProduct?: bool,
     *     project?: ProjectsForRule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
