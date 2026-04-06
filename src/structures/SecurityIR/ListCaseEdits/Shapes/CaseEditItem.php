<?php

namespace Sunaoka\Aws\Structures\SecurityIR\ListCaseEdits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $eventTimestamp
 * @property string|null $principal
 * @property string|null $action
 * @property string|null $message
 */
class CaseEditItem extends Shape
{
    /**
     * @param array{
     *     eventTimestamp?: \Aws\Api\DateTimeResult|null,
     *     principal?: string|null,
     *     action?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
