<?php

namespace Sunaoka\Aws\Structures\Sfn\ListStateMachines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stateMachineArn
 * @property string $name
 * @property 'STANDARD'|'EXPRESS' $type
 * @property \Aws\Api\DateTimeResult $creationDate
 */
class StateMachineListItem extends Shape
{
    /**
     * @param array{
     *     stateMachineArn: string,
     *     name: string,
     *     type: 'STANDARD'|'EXPRESS',
     *     creationDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
