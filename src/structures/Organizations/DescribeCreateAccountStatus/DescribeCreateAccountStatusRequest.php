<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeCreateAccountStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreateAccountRequestId
 */
class DescribeCreateAccountStatusRequest extends Request
{
    /**
     * @param array{CreateAccountRequestId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
