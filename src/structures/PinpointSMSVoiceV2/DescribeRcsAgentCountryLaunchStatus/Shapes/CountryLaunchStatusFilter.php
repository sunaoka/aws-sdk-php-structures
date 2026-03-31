<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRcsAgentCountryLaunchStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'country-launch-status' $Name
 * @property list<string> $Values
 */
class CountryLaunchStatusFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'country-launch-status',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
