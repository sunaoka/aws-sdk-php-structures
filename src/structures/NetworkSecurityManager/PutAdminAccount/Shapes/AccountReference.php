<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\PutAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string|null $name
 * @property string|null $email
 */
class AccountReference extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     name?: string|null,
     *     email?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
