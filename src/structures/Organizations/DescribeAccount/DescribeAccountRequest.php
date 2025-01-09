<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 */
class DescribeAccountRequest extends Request
{
    /**
     * @param array{AccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
