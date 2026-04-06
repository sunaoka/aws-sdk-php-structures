<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string $userIdentifier
 * @property 'IAM_USER'|'IAM_ROLE'|'SSO_USER'|null $userType
 */
class CreateUserProfileRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     userIdentifier: string,
     *     userType?: 'IAM_USER'|'IAM_ROLE'|'SSO_USER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
