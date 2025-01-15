<?php

namespace Sunaoka\Aws\Structures\Sns\ListPhoneNumbersOptedOut;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 */
class ListPhoneNumbersOptedOutRequest extends Request
{
    /**
     * @param array{nextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
