<?php

namespace Sunaoka\Aws\Structures\Sns\ListTopics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TopicArn
 */
class Topic extends Shape
{
    /**
     * @param array{TopicArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
