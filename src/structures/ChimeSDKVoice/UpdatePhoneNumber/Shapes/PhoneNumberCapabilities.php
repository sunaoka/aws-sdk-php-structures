<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdatePhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $InboundCall
 * @property bool|null $OutboundCall
 * @property bool|null $InboundSMS
 * @property bool|null $OutboundSMS
 * @property bool|null $InboundMMS
 * @property bool|null $OutboundMMS
 */
class PhoneNumberCapabilities extends Shape
{
    /**
     * @param array{
     *     InboundCall?: bool|null,
     *     OutboundCall?: bool|null,
     *     InboundSMS?: bool|null,
     *     OutboundSMS?: bool|null,
     *     InboundMMS?: bool|null,
     *     OutboundMMS?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
