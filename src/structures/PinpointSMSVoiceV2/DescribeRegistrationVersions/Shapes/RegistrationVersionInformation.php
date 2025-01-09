<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $VersionNumber
 * @property 'DRAFT'|'SUBMITTED'|'REVIEWING'|'REQUIRES_AUTHENTICATION'|'APPROVED'|'DISCARDED'|'DENIED'|'REVOKED'|'ARCHIVED' $RegistrationVersionStatus
 * @property RegistrationVersionStatusHistory $RegistrationVersionStatusHistory
 * @property list<RegistrationDeniedReasonInformation> $DeniedReasons
 */
class RegistrationVersionInformation extends Shape
{
    /**
     * @param array{
     *     VersionNumber: int,
     *     RegistrationVersionStatus: 'DRAFT'|'SUBMITTED'|'REVIEWING'|'REQUIRES_AUTHENTICATION'|'APPROVED'|'DISCARDED'|'DENIED'|'REVOKED'|'ARCHIVED',
     *     RegistrationVersionStatusHistory: RegistrationVersionStatusHistory,
     *     DeniedReasons?: list<RegistrationDeniedReasonInformation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
