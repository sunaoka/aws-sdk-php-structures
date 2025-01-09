<?php

namespace Sunaoka\Aws\Structures\Connect\AssociatePhoneNumberContactFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 * @property string $InstanceId
 * @property string $ContactFlowId
 */
class AssociatePhoneNumberContactFlowRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberId: string,
     *     InstanceId: string,
     *     ContactFlowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
