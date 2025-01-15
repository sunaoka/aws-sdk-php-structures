<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergOrphanFileDeletionConfiguration|null $icebergConfiguration
 */
class OrphanFileDeletionConfiguration extends Shape
{
    /**
     * @param array{icebergConfiguration?: IcebergOrphanFileDeletionConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
