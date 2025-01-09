<?php

namespace Sunaoka\Aws\Structures\Chime\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserId
 * @property string $AccountId
 * @property string $PrimaryEmail
 * @property string $PrimaryProvisionedNumber
 * @property string $DisplayName
 * @property 'Basic'|'Plus'|'Pro'|'ProTrial' $LicenseType
 * @property 'PrivateUser'|'SharedDevice' $UserType
 * @property 'Unregistered'|'Registered'|'Suspended' $UserRegistrationStatus
 * @property 'Pending'|'Accepted'|'Failed' $UserInvitationStatus
 * @property \Aws\Api\DateTimeResult $RegisteredOn
 * @property \Aws\Api\DateTimeResult $InvitedOn
 * @property AlexaForBusinessMetadata $AlexaForBusinessMetadata
 * @property string $PersonalPIN
 */
class User extends Shape
{
    /**
     * @param array{
     *     UserId: string,
     *     AccountId?: string,
     *     PrimaryEmail?: string,
     *     PrimaryProvisionedNumber?: string,
     *     DisplayName?: string,
     *     LicenseType?: 'Basic'|'Plus'|'Pro'|'ProTrial',
     *     UserType?: 'PrivateUser'|'SharedDevice',
     *     UserRegistrationStatus?: 'Unregistered'|'Registered'|'Suspended',
     *     UserInvitationStatus?: 'Pending'|'Accepted'|'Failed',
     *     RegisteredOn?: \Aws\Api\DateTimeResult,
     *     InvitedOn?: \Aws\Api\DateTimeResult,
     *     AlexaForBusinessMetadata?: AlexaForBusinessMetadata,
     *     PersonalPIN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
