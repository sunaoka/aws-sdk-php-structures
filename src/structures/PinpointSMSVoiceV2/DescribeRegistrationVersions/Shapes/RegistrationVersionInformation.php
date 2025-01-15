<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100000> $VersionNumber
 * @property 'DRAFT'|'SUBMITTED'|'REVIEWING'|'REQUIRES_AUTHENTICATION'|'APPROVED'|'DISCARDED'|'DENIED'|'REVOKED'|'ARCHIVED' $RegistrationVersionStatus
 * @property RegistrationVersionStatusHistory $RegistrationVersionStatusHistory
 * @property list<RegistrationDeniedReasonInformation>|null $DeniedReasons
 */
class RegistrationVersionInformation extends Shape
{
    /**
     * @param array{
     *     VersionNumber: int<1, 100000>,
     *     RegistrationVersionStatus: 'DRAFT'|'SUBMITTED'|'REVIEWING'|'REQUIRES_AUTHENTICATION'|'APPROVED'|'DISCARDED'|'DENIED'|'REVOKED'|'ARCHIVED',
     *     RegistrationVersionStatusHistory: RegistrationVersionStatusHistory,
     *     DeniedReasons?: list<RegistrationDeniedReasonInformation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
