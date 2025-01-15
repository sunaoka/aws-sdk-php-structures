<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location|null $TempDirectory
 * @property string $TableName
 */
class DatabaseTableOutputOptions extends Shape
{
    /**
     * @param array{
     *     TempDirectory?: S3Location|null,
     *     TableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
