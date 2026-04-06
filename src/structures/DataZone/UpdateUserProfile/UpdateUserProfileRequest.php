<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $userIdentifier
 * @property 'IAM'|'SSO'|null $type
 * @property 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED' $status
 */
class UpdateUserProfileRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     userIdentifier: string,
     *     type?: 'IAM'|'SSO'|null,
     *     status: 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
