<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LambdaArn
 * @property list<EventTriggerDefinition>|null $EventTriggers
 */
class LambdaResource extends Shape
{
    /**
     * @param array{
     *     LambdaArn?: string|null,
     *     EventTriggers?: list<EventTriggerDefinition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
