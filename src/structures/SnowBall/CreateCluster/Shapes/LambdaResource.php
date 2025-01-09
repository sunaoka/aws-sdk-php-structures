<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LambdaArn
 * @property list<EventTriggerDefinition> $EventTriggers
 */
class LambdaResource extends Shape
{
    /**
     * @param array{
     *     LambdaArn?: string,
     *     EventTriggers?: list<EventTriggerDefinition>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
