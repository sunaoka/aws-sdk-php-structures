<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegistrationArn
 * @property string $RegistrationId
 * @property string $RegistrationType
 * @property 'CREATED'|'SUBMITTED'|'REVIEWING'|'REQUIRES_AUTHENTICATION'|'PROVISIONING'|'COMPLETE'|'REQUIRES_UPDATES'|'CLOSED'|'DELETED' $RegistrationStatus
 * @property int<1, 100000> $CurrentVersionNumber
 * @property int<1, 100000>|null $ApprovedVersionNumber
 * @property int<1, 100000>|null $LatestDeniedVersionNumber
 * @property array<string, string>|null $AdditionalAttributes
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class RegistrationInformation extends Shape
{
    /**
     * @param array{
     *     RegistrationArn: string,
     *     RegistrationId: string,
     *     RegistrationType: string,
     *     RegistrationStatus: 'CREATED'|'SUBMITTED'|'REVIEWING'|'REQUIRES_AUTHENTICATION'|'PROVISIONING'|'COMPLETE'|'REQUIRES_UPDATES'|'CLOSED'|'DELETED',
     *     CurrentVersionNumber: int<1, 100000>,
     *     ApprovedVersionNumber?: int<1, 100000>|null,
     *     LatestDeniedVersionNumber?: int<1, 100000>|null,
     *     AdditionalAttributes?: array<string, string>|null,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
