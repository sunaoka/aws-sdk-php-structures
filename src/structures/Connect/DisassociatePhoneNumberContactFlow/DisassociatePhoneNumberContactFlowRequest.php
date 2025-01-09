<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociatePhoneNumberContactFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 * @property string $InstanceId
 */
class DisassociatePhoneNumberContactFlowRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
