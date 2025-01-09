<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $MaxFiles
 * @property 'LAST_MODIFIED_DATE' $OrderedBy
 * @property 'DESCENDING'|'ASCENDING' $Order
 */
class FilesLimit extends Shape
{
    /**
     * @param array{
     *     MaxFiles: int<1, max>,
     *     OrderedBy?: 'LAST_MODIFIED_DATE',
     *     Order?: 'DESCENDING'|'ASCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
