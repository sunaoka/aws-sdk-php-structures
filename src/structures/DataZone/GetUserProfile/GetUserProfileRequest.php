<?php

namespace Sunaoka\Aws\Structures\DataZone\GetUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $userIdentifier
 * @property 'IAM'|'SSO'|null $type
 */
class GetUserProfileRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     userIdentifier: string,
     *     type?: 'IAM'|'SSO'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
