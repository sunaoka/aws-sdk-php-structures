<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $UserId
 * @property 'Basic'|'Plus'|'Pro'|'ProTrial'|null $LicenseType
 * @property 'PrivateUser'|'SharedDevice'|null $UserType
 * @property Shapes\AlexaForBusinessMetadata|null $AlexaForBusinessMetadata
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     UserId: string,
     *     LicenseType?: 'Basic'|'Plus'|'Pro'|'ProTrial'|null,
     *     UserType?: 'PrivateUser'|'SharedDevice'|null,
     *     AlexaForBusinessMetadata?: Shapes\AlexaForBusinessMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
