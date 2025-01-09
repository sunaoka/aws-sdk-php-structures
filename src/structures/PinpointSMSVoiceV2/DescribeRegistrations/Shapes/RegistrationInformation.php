<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegistrationArn
 * @property string $RegistrationId
 * @property string $RegistrationType
 * @property 'CREATED'|'SUBMITTED'|'REVIEWING'|'REQUIRES_AUTHENTICATION'|'PROVISIONING'|'COMPLETE'|'REQUIRES_UPDATES'|'CLOSED'|'DELETED' $RegistrationStatus
 * @property int $CurrentVersionNumber
 * @property int $ApprovedVersionNumber
 * @property int $LatestDeniedVersionNumber
 * @property array<string, string> $AdditionalAttributes
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
     *     CurrentVersionNumber: int,
     *     ApprovedVersionNumber?: int,
     *     LatestDeniedVersionNumber?: int,
     *     AdditionalAttributes?: array<string, string>,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
