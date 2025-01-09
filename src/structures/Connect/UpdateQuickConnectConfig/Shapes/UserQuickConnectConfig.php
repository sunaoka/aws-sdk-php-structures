<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQuickConnectConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserId
 * @property string $ContactFlowId
 */
class UserQuickConnectConfig extends Shape
{
    /**
     * @param array{
     *     UserId: string,
     *     ContactFlowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
