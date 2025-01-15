<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyName
 * @property string|null $PolicyArn
 */
class AttachedPolicy extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string|null,
     *     PolicyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
