<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property AmazonRedshiftNodeData $Data
 * @property list<string> $Inputs
 */
class AmazonRedshiftTarget extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Data?: AmazonRedshiftNodeData,
     *     Inputs?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
