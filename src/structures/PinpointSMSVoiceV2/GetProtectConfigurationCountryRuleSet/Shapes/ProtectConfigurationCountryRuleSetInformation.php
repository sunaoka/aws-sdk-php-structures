<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\GetProtectConfigurationCountryRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'BLOCK' $ProtectStatus
 */
class ProtectConfigurationCountryRuleSetInformation extends Shape
{
    /**
     * @param array{ProtectStatus: 'ALLOW'|'BLOCK'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
