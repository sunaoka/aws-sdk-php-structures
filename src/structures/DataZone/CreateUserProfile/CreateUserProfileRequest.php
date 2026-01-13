<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $userIdentifier
 * @property 'IAM_USER'|'IAM_ROLE'|'SSO_USER'|null $userType
 * @property string|null $clientToken
 */
class CreateUserProfileRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     userIdentifier: string,
     *     userType?: 'IAM_USER'|'IAM_ROLE'|'SSO_USER'|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
