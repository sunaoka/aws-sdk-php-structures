<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelExportsToTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 */
class DefaultErrorDetails extends Shape
{
    /**
     * @param array{Message?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
