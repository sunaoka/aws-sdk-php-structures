<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxFiles
 * @property 'LAST_MODIFIED_DATE' $OrderedBy
 * @property 'DESCENDING'|'ASCENDING' $Order
 */
class FilesLimit extends Shape
{
    /**
     * @param array{
     *     MaxFiles: int,
     *     OrderedBy?: 'LAST_MODIFIED_DATE',
     *     Order?: 'DESCENDING'|'ASCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
