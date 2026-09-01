<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'APP_ID'|'APP_NAME'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER' $Name
 * @property 'StringEquals'|'StringLike' $Operator
 * @property string $Value
 */
class SearchAppsFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'APP_ID'|'APP_NAME'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER',
     *     Operator: 'StringEquals'|'StringLike',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
