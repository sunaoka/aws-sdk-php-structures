<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchUserProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainId
 * @property string|null $id
 * @property 'IAM'|'SSO'|null $type
 * @property 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED'|null $status
 * @property UserProfileDetails|null $details
 */
class UserProfileSummary extends Shape
{
    /**
     * @param array{
     *     domainId?: string|null,
     *     id?: string|null,
     *     type?: 'IAM'|'SSO'|null,
     *     status?: 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED'|null,
     *     details?: UserProfileDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
