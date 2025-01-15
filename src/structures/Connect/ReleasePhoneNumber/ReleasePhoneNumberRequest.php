<?php

namespace Sunaoka\Aws\Structures\Connect\ReleasePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 * @property string|null $ClientToken
 */
class ReleasePhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberId: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
