<?php

namespace Sunaoka\Aws\Structures\Detective\BatchGetMembershipDatasources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GraphArn
 * @property string $Reason
 */
class UnprocessedGraph extends Shape
{
    /**
     * @param array{
     *     GraphArn?: string,
     *     Reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
