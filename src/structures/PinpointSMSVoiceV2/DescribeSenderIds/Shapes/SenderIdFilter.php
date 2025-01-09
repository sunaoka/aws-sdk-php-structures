<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeSenderIds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'sender-id'|'iso-country-code'|'message-type'|'deletion-protection-enabled'|'registered' $Name
 * @property list<string> $Values
 */
class SenderIdFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'sender-id'|'iso-country-code'|'message-type'|'deletion-protection-enabled'|'registered',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
