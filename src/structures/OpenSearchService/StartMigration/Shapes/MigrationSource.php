<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\StartMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasourceArn
 */
class MigrationSource extends Shape
{
    /**
     * @param array{datasourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
