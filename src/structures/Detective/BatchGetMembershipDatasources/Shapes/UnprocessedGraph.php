<?php

namespace Sunaoka\Aws\Structures\Detective\BatchGetMembershipDatasources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GraphArn
 * @property string|null $Reason
 */
class UnprocessedGraph extends Shape
{
    /**
     * @param array{
     *     GraphArn?: string|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
