<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListJobSchemaVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobConfigSchemaVersion
 */
class JobConfigSchemaVersionSummary extends Shape
{
    /**
     * @param array{JobConfigSchemaVersion: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
