<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchActionConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTION_CONNECTOR_NAME'|'ACTION_CONNECTOR_TYPE'|'QUICKSIGHT_OWNER'|'QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER' $Name
 * @property 'StringEquals'|'StringLike' $Operator
 * @property string $Value
 */
class ActionConnectorSearchFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'ACTION_CONNECTOR_NAME'|'ACTION_CONNECTOR_TYPE'|'QUICKSIGHT_OWNER'|'QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER',
     *     Operator: 'StringEquals'|'StringLike',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
