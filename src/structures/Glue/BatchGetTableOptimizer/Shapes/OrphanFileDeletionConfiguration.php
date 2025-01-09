<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergOrphanFileDeletionConfiguration $icebergConfiguration
 */
class OrphanFileDeletionConfiguration extends Shape
{
    /**
     * @param array{icebergConfiguration?: IcebergOrphanFileDeletionConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
