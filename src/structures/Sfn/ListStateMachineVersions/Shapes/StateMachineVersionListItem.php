<?php

namespace Sunaoka\Aws\Structures\Sfn\ListStateMachineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stateMachineVersionArn
 * @property \Aws\Api\DateTimeResult $creationDate
 */
class StateMachineVersionListItem extends Shape
{
    /**
     * @param array{
     *     stateMachineVersionArn: string,
     *     creationDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
