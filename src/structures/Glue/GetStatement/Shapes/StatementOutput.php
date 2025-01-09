<?php

namespace Sunaoka\Aws\Structures\Glue\GetStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatementOutputData $Data
 * @property int $ExecutionCount
 * @property 'WAITING'|'RUNNING'|'AVAILABLE'|'CANCELLING'|'CANCELLED'|'ERROR' $Status
 * @property string $ErrorName
 * @property string $ErrorValue
 * @property list<string> $Traceback
 */
class StatementOutput extends Shape
{
    /**
     * @param array{
     *     Data?: StatementOutputData,
     *     ExecutionCount?: int,
     *     Status?: 'WAITING'|'RUNNING'|'AVAILABLE'|'CANCELLING'|'CANCELLED'|'ERROR',
     *     ErrorName?: string,
     *     ErrorValue?: string,
     *     Traceback?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
