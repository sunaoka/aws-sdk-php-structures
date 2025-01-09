<?php

namespace Sunaoka\Aws\Structures\Connect\DescribePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 */
class DescribePhoneNumberRequest extends Request
{
    /**
     * @param array{PhoneNumberId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
