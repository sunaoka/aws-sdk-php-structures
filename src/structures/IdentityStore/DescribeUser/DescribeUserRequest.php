<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property string $UserId
 * @property list<string>|null $Extensions
 */
class DescribeUserRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     UserId: string,
     *     Extensions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
