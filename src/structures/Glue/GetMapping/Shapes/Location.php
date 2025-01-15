<?php

namespace Sunaoka\Aws\Structures\Glue\GetMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CodeGenNodeArg>|null $Jdbc
 * @property list<CodeGenNodeArg>|null $S3
 * @property list<CodeGenNodeArg>|null $DynamoDB
 */
class Location extends Shape
{
    /**
     * @param array{
     *     Jdbc?: list<CodeGenNodeArg>|null,
     *     S3?: list<CodeGenNodeArg>|null,
     *     DynamoDB?: list<CodeGenNodeArg>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
