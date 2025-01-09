<?php

namespace Sunaoka\Aws\Structures\Sns\ListTopics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicArn
 */
class Topic extends Shape
{
    /**
     * @param array{TopicArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
