<?php

namespace Sunaoka\Aws\Structures\Chime\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserId
 * @property string|null $AccountId
 * @property string|null $PrimaryEmail
 * @property string|null $PrimaryProvisionedNumber
 * @property string|null $DisplayName
 * @property 'Basic'|'Plus'|'Pro'|'ProTrial'|null $LicenseType
 * @property 'PrivateUser'|'SharedDevice'|null $UserType
 * @property 'Unregistered'|'Registered'|'Suspended'|null $UserRegistrationStatus
 * @property 'Pending'|'Accepted'|'Failed'|null $UserInvitationStatus
 * @property \Aws\Api\DateTimeResult|null $RegisteredOn
 * @property \Aws\Api\DateTimeResult|null $InvitedOn
 * @property AlexaForBusinessMetadata|null $AlexaForBusinessMetadata
 * @property string|null $PersonalPIN
 */
class User extends Shape
{
    /**
     * @param array{
     *     UserId: string,
     *     AccountId?: string|null,
     *     PrimaryEmail?: string|null,
     *     PrimaryProvisionedNumber?: string|null,
     *     DisplayName?: string|null,
     *     LicenseType?: 'Basic'|'Plus'|'Pro'|'ProTrial'|null,
     *     UserType?: 'PrivateUser'|'SharedDevice'|null,
     *     UserRegistrationStatus?: 'Unregistered'|'Registered'|'Suspended'|null,
     *     UserInvitationStatus?: 'Pending'|'Accepted'|'Failed'|null,
     *     RegisteredOn?: \Aws\Api\DateTimeResult|null,
     *     InvitedOn?: \Aws\Api\DateTimeResult|null,
     *     AlexaForBusinessMetadata?: AlexaForBusinessMetadata|null,
     *     PersonalPIN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
