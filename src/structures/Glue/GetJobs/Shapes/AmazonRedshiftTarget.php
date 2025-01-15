<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property AmazonRedshiftNodeData|null $Data
 * @property list<string>|null $Inputs
 */
class AmazonRedshiftTarget extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Data?: AmazonRedshiftNodeData|null,
     *     Inputs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
