<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED' $status
 * @property 'IAM'|'SSO'|null $type
 * @property string $userIdentifier
 */
class UpdateUserProfileRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     status: 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED',
     *     type?: 'IAM'|'SSO'|null,
     *     userIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
