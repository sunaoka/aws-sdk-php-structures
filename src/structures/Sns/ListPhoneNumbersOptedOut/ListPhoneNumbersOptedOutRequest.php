<?php

namespace Sunaoka\Aws\Structures\Sns\ListPhoneNumbersOptedOut;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 */
class ListPhoneNumbersOptedOutRequest extends Request
{
    /**
     * @param array{nextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
