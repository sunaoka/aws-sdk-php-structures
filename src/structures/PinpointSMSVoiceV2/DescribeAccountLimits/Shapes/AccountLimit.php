<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeAccountLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PHONE_NUMBERS'|'POOLS'|'CONFIGURATION_SETS'|'OPT_OUT_LISTS'|'SENDER_IDS'|'REGISTRATIONS'|'REGISTRATION_ATTACHMENTS'|'VERIFIED_DESTINATION_NUMBERS' $Name
 * @property int $Used
 * @property int $Max
 */
class AccountLimit extends Shape
{
    /**
     * @param array{
     *     Name: 'PHONE_NUMBERS'|'POOLS'|'CONFIGURATION_SETS'|'OPT_OUT_LISTS'|'SENDER_IDS'|'REGISTRATIONS'|'REGISTRATION_ATTACHMENTS'|'VERIFIED_DESTINATION_NUMBERS',
     *     Used: int,
     *     Max: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
