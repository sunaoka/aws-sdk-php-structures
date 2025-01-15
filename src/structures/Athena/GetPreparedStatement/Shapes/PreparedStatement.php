<?php

namespace Sunaoka\Aws\Structures\Athena\GetPreparedStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StatementName
 * @property string|null $QueryStatement
 * @property string|null $WorkGroupName
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class PreparedStatement extends Shape
{
    /**
     * @param array{
     *     StatementName?: string|null,
     *     QueryStatement?: string|null,
     *     WorkGroupName?: string|null,
     *     Description?: string|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
