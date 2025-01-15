<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $MaxFiles
 * @property 'LAST_MODIFIED_DATE'|null $OrderedBy
 * @property 'DESCENDING'|'ASCENDING'|null $Order
 */
class FilesLimit extends Shape
{
    /**
     * @param array{
     *     MaxFiles: int<1, max>,
     *     OrderedBy?: 'LAST_MODIFIED_DATE'|null,
     *     Order?: 'DESCENDING'|'ASCENDING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
