<?php

namespace Sunaoka\Aws\Structures\SecurityIR\ListCaseEdits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $eventTimestamp
 * @property string $principal
 * @property string $action
 * @property string $message
 */
class CaseEditItem extends Shape
{
    /**
     * @param array{
     *     eventTimestamp?: \Aws\Api\DateTimeResult,
     *     principal?: string,
     *     action?: string,
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
