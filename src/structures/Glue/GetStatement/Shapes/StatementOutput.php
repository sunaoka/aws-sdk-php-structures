<?php

namespace Sunaoka\Aws\Structures\Glue\GetStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatementOutputData|null $Data
 * @property int|null $ExecutionCount
 * @property 'WAITING'|'RUNNING'|'AVAILABLE'|'CANCELLING'|'CANCELLED'|'ERROR'|null $Status
 * @property string|null $ErrorName
 * @property string|null $ErrorValue
 * @property list<string>|null $Traceback
 */
class StatementOutput extends Shape
{
    /**
     * @param array{
     *     Data?: StatementOutputData|null,
     *     ExecutionCount?: int|null,
     *     Status?: 'WAITING'|'RUNNING'|'AVAILABLE'|'CANCELLING'|'CANCELLED'|'ERROR'|null,
     *     ErrorName?: string|null,
     *     ErrorValue?: string|null,
     *     Traceback?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
