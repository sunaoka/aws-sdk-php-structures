<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetPreparedStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StatementName
 * @property string $QueryStatement
 * @property string $WorkGroupName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class PreparedStatement extends Shape
{
    /**
     * @param array{
     *     StatementName?: string,
     *     QueryStatement?: string,
     *     WorkGroupName?: string,
     *     Description?: string,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
