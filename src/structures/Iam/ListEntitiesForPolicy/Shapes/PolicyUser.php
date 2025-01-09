<?php

namespace Sunaoka\Aws\Structures\Iam\ListEntitiesForPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property string $UserId
 */
class PolicyUser extends Shape
{
    /**
     * @param array{
     *     UserName?: string,
     *     UserId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
