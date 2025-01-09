<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $email
 */
class AccountDetail extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     email: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
