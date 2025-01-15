<?php

namespace Sunaoka\Aws\Structures\Connect\ClaimPhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TargetArn
 * @property string|null $InstanceId
 * @property string $PhoneNumber
 * @property string|null $PhoneNumberDescription
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class ClaimPhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     TargetArn?: string|null,
     *     InstanceId?: string|null,
     *     PhoneNumber: string,
     *     PhoneNumberDescription?: string|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
