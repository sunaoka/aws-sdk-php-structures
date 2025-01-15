<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelExportsAsScript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 */
class DefaultErrorDetails extends Shape
{
    /**
     * @param array{Message?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
