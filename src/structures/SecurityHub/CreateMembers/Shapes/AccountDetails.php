<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $Email
 */
class AccountDetails extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     Email?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
