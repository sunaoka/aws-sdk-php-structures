<?php

namespace Sunaoka\Aws\Structures\Glue\GetMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CodeGenNodeArg> $Jdbc
 * @property list<CodeGenNodeArg> $S3
 * @property list<CodeGenNodeArg> $DynamoDB
 */
class Location extends Shape
{
    /**
     * @param array{
     *     Jdbc?: list<CodeGenNodeArg>,
     *     S3?: list<CodeGenNodeArg>,
     *     DynamoDB?: list<CodeGenNodeArg>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
