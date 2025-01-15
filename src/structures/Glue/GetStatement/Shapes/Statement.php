<?php

namespace Sunaoka\Aws\Structures\Glue\GetStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Id
 * @property string|null $Code
 * @property 'WAITING'|'RUNNING'|'AVAILABLE'|'CANCELLING'|'CANCELLED'|'ERROR'|null $State
 * @property StatementOutput|null $Output
 * @property double|null $Progress
 * @property int|null $StartedOn
 * @property int|null $CompletedOn
 */
class Statement extends Shape
{
    /**
     * @param array{
     *     Id?: int|null,
     *     Code?: string|null,
     *     State?: 'WAITING'|'RUNNING'|'AVAILABLE'|'CANCELLING'|'CANCELLED'|'ERROR'|null,
     *     Output?: StatementOutput|null,
     *     Progress?: double|null,
     *     StartedOn?: int|null,
     *     CompletedOn?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
