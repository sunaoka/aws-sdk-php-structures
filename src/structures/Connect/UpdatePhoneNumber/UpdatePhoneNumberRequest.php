<?php

namespace Sunaoka\Aws\Structures\Connect\UpdatePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 * @property string $TargetArn
 * @property string $InstanceId
 * @property string $ClientToken
 */
class UpdatePhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberId: string,
     *     TargetArn?: string,
     *     InstanceId?: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
