<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRcsAgentCountryLaunchStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IsoCountryCode
 * @property 'CREATED'|'PENDING'|'PARTIAL'|'ACTIVE'|'REJECTED' $Status
 * @property string|null $RcsPlatformId
 * @property string $RegistrationId
 * @property list<CarrierStatusInformation> $CarrierStatus
 */
class CountryLaunchStatusInformation extends Shape
{
    /**
     * @param array{
     *     IsoCountryCode: string,
     *     Status: 'CREATED'|'PENDING'|'PARTIAL'|'ACTIVE'|'REJECTED',
     *     RcsPlatformId?: string|null,
     *     RegistrationId: string,
     *     CarrierStatus: list<CarrierStatusInformation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
