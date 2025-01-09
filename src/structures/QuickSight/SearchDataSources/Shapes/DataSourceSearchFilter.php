<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'StringEquals'|'StringLike' $Operator
 * @property 'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'DATASOURCE_NAME' $Name
 * @property string $Value
 */
class DataSourceSearchFilter extends Shape
{
    /**
     * @param array{
     *     Operator: 'StringEquals'|'StringLike',
     *     Name: 'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'DATASOURCE_NAME',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
