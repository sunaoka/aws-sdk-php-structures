<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultErrorDetails|null $defaultErrorDetails
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{defaultErrorDetails?: DefaultErrorDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
