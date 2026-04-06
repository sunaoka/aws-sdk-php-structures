<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeNotifyConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'display-name'|'enabled-countries'|'enabled-channels'|'default-template'|'default-pool'|'use-case'|'status'|'deletion-protection-enabled'|'tier-upgrade-status' $Name
 * @property list<string> $Values
 */
class NotifyConfigurationFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'display-name'|'enabled-countries'|'enabled-channels'|'default-template'|'default-pool'|'use-case'|'status'|'deletion-protection-enabled'|'tier-upgrade-status',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
