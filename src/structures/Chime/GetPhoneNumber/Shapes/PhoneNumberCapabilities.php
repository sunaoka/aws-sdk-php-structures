<?php

namespace Sunaoka\Aws\Structures\Chime\GetPhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $InboundCall
 * @property bool $OutboundCall
 * @property bool $InboundSMS
 * @property bool $OutboundSMS
 * @property bool $InboundMMS
 * @property bool $OutboundMMS
 */
class PhoneNumberCapabilities extends Shape
{
    /**
     * @param array{
     *     InboundCall?: bool,
     *     OutboundCall?: bool,
     *     InboundSMS?: bool,
     *     OutboundSMS?: bool,
     *     InboundMMS?: bool,
     *     OutboundMMS?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
