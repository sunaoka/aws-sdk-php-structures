<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchUserProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserProfileDetails|null $details
 * @property string|null $domainId
 * @property string|null $id
 * @property 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED'|null $status
 * @property 'IAM'|'SSO'|null $type
 */
class UserProfileSummary extends Shape
{
    /**
     * @param array{
     *     details?: UserProfileDetails|null,
     *     domainId?: string|null,
     *     id?: string|null,
     *     status?: 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED'|null,
     *     type?: 'IAM'|'SSO'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
