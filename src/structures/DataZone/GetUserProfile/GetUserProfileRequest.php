<?php

namespace Sunaoka\Aws\Structures\DataZone\GetUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property 'IAM'|'SSO'|null $type
 * @property string $userIdentifier
 */
class GetUserProfileRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     type?: 'IAM'|'SSO'|null,
     *     userIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
