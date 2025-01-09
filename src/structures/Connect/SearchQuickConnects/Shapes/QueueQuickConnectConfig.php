<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQuickConnects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueueId
 * @property string $ContactFlowId
 */
class QueueQuickConnectConfig extends Shape
{
    /**
     * @param array{
     *     QueueId: string,
     *     ContactFlowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
