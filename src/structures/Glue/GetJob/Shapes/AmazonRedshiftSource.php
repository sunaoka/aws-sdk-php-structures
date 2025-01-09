<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property AmazonRedshiftNodeData $Data
 */
class AmazonRedshiftSource extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Data?: AmazonRedshiftNodeData
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
