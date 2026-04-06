<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateProtectConfigurationCountryRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'BLOCK'|'MONITOR'|'FILTER' $ProtectStatus
 */
class ProtectConfigurationCountryRuleSetInformation extends Shape
{
    /**
     * @param array{ProtectStatus: 'ALLOW'|'BLOCK'|'MONITOR'|'FILTER'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
