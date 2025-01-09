<?php

namespace Sunaoka\Aws\Structures\Connect\ClaimPhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetArn
 * @property string $InstanceId
 * @property string $PhoneNumber
 * @property string $PhoneNumberDescription
 * @property array<string, string> $Tags
 * @property string $ClientToken
 */
class ClaimPhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     TargetArn?: string,
     *     InstanceId?: string,
     *     PhoneNumber: string,
     *     PhoneNumberDescription?: string,
     *     Tags?: array<string, string>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
