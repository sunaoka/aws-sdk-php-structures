<?php

namespace Sunaoka\Aws\Structures\Iam\ListAttachedRolePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property string $PolicyArn
 */
class AttachedPolicy extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string,
     *     PolicyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
