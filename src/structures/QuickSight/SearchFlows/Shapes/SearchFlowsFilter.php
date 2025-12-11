<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'assetName'|'assetDescription'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER' $Name
 * @property 'StringEquals'|'StringLike' $Operator
 * @property string $Value
 */
class SearchFlowsFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'assetName'|'assetDescription'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER',
     *     Operator: 'StringEquals'|'StringLike',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
