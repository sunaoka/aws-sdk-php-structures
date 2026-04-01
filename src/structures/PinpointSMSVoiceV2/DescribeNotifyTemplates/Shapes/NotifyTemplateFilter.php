<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeNotifyTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'template-type'|'channels'|'tier-access'|'supported-countries'|'language-code'|'supported-voice-ids' $Name
 * @property list<string> $Values
 */
class NotifyTemplateFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'template-type'|'channels'|'tier-access'|'supported-countries'|'language-code'|'supported-voice-ids',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
