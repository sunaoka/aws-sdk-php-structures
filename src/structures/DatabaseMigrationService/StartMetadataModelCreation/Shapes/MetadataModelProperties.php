<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartMetadataModelCreation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatementProperties|null $StatementProperties
 */
class MetadataModelProperties extends Shape
{
    /**
     * @param array{StatementProperties?: StatementProperties|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
