<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListProtectConfigurationRuleSetNumberOverrides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'iso-country-code'|'destination-phone-number-begins-with'|'action'|'expires-before'|'expires-after'|'created-before'|'created-after' $Name
 * @property list<string> $Values
 */
class ProtectConfigurationRuleSetNumberOverrideFilterItem extends Shape
{
    /**
     * @param array{
     *     Name: 'iso-country-code'|'destination-phone-number-begins-with'|'action'|'expires-before'|'expires-after'|'created-before'|'created-after',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
