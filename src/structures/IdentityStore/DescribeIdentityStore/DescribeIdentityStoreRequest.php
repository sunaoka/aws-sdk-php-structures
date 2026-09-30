<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeIdentityStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 */
class DescribeIdentityStoreRequest extends Request
{
    /**
     * @param array{IdentityStoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
