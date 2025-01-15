<?php

namespace Sunaoka\Aws\Structures\Connect\UpdatePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 * @property string|null $TargetArn
 * @property string|null $InstanceId
 * @property string|null $ClientToken
 */
class UpdatePhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberId: string,
     *     TargetArn?: string|null,
     *     InstanceId?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
