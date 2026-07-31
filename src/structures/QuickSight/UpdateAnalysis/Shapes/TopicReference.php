<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicPlaceholder
 * @property string $TopicArn
 */
class TopicReference extends Shape
{
    /**
     * @param array{
     *     TopicPlaceholder: string,
     *     TopicArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
