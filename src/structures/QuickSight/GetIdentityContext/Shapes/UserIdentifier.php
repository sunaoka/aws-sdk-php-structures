<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetIdentityContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserName
 * @property string|null $Email
 * @property string|null $UserArn
 */
class UserIdentifier extends Shape
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     Email?: string|null,
     *     UserArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
