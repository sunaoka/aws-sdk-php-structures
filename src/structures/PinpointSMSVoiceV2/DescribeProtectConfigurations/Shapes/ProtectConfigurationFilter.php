<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeProtectConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'account-default'|'deletion-protection-enabled' $Name
 * @property list<string> $Values
 */
class ProtectConfigurationFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'account-default'|'deletion-protection-enabled',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
