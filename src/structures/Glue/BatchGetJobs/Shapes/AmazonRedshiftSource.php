<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property AmazonRedshiftNodeData|null $Data
 */
class AmazonRedshiftSource extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Data?: AmazonRedshiftNodeData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
