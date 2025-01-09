<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $UserId
 * @property 'Basic'|'Plus'|'Pro'|'ProTrial' $LicenseType
 * @property 'PrivateUser'|'SharedDevice' $UserType
 * @property Shapes\AlexaForBusinessMetadata $AlexaForBusinessMetadata
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     UserId: string,
     *     LicenseType?: 'Basic'|'Plus'|'Pro'|'ProTrial',
     *     UserType?: 'PrivateUser'|'SharedDevice',
     *     AlexaForBusinessMetadata?: Shapes\AlexaForBusinessMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
