<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartMetadataModelCreation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Definition
 */
class StatementProperties extends Shape
{
    /**
     * @param array{Definition: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
