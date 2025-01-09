<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelExportsAsScript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultErrorDetails $defaultErrorDetails
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{defaultErrorDetails?: DefaultErrorDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
