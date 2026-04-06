<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeConfigurationSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'event-destination-name'|'matching-event-types'|'default-message-type'|'default-sender-id' $Name
 * @property list<string> $Values
 */
class ConfigurationSetFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'event-destination-name'|'matching-event-types'|'default-message-type'|'default-sender-id',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
