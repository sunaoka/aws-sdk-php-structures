<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRcsAgentCountryLaunchStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CarrierName
 * @property 'PENDING'|'ACTIVE'|'REJECTED' $Status
 */
class CarrierStatusInformation extends Shape
{
    /**
     * @param array{
     *     CarrierName: string,
     *     Status: 'PENDING'|'ACTIVE'|'REJECTED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
