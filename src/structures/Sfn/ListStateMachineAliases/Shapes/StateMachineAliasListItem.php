<?php

namespace Sunaoka\Aws\Structures\Sfn\ListStateMachineAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stateMachineAliasArn
 * @property \Aws\Api\DateTimeResult $creationDate
 */
class StateMachineAliasListItem extends Shape
{
    /**
     * @param array{
     *     stateMachineAliasArn: string,
     *     creationDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
