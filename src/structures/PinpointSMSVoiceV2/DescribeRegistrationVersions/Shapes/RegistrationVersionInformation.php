<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100000> $VersionNumber
 * @property 'DRAFT'|'SUBMITTED'|'AWS_REVIEWING'|'REVIEWING'|'REQUIRES_AUTHENTICATION'|'APPROVED'|'DISCARDED'|'DENIED'|'REVOKED'|'ARCHIVED' $RegistrationVersionStatus
 * @property RegistrationVersionStatusHistory $RegistrationVersionStatusHistory
 * @property list<RegistrationDeniedReasonInformation>|null $DeniedReasons
 * @property string|null $Feedback
 */
class RegistrationVersionInformation extends Shape
{
    /**
     * @param array{
     *     VersionNumber: int<1, 100000>,
     *     RegistrationVersionStatus: 'DRAFT'|'SUBMITTED'|'AWS_REVIEWING'|'REVIEWING'|'REQUIRES_AUTHENTICATION'|'APPROVED'|'DISCARDED'|'DENIED'|'REVOKED'|'ARCHIVED',
     *     RegistrationVersionStatusHistory: RegistrationVersionStatusHistory,
     *     DeniedReasons?: list<RegistrationDeniedReasonInformation>|null,
     *     Feedback?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
