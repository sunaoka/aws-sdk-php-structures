<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCommandInvocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InvokedAfter'|'InvokedBefore'|'Status'|'ExecutionStage'|'DocumentName' $key
 * @property string $value
 */
class CommandFilter extends Shape
{
    /**
     * @param array{
     *     key: 'InvokedAfter'|'InvokedBefore'|'Status'|'ExecutionStage'|'DocumentName',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
