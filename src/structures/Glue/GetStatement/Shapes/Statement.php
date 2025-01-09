<?php

namespace Sunaoka\Aws\Structures\Glue\GetStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Id
 * @property string $Code
 * @property 'WAITING'|'RUNNING'|'AVAILABLE'|'CANCELLING'|'CANCELLED'|'ERROR' $State
 * @property StatementOutput $Output
 * @property double $Progress
 * @property int $StartedOn
 * @property int $CompletedOn
 */
class Statement extends Shape
{
    /**
     * @param array{
     *     Id?: int,
     *     Code?: string,
     *     State?: 'WAITING'|'RUNNING'|'AVAILABLE'|'CANCELLING'|'CANCELLED'|'ERROR',
     *     Output?: StatementOutput,
     *     Progress?: double,
     *     StartedOn?: int,
     *     CompletedOn?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
