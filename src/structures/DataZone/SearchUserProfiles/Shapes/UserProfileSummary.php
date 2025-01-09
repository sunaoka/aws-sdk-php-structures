<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchUserProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserProfileDetails $details
 * @property string $domainId
 * @property string $id
 * @property 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED' $status
 * @property 'IAM'|'SSO' $type
 */
class UserProfileSummary extends Shape
{
    /**
     * @param array{
     *     details?: UserProfileDetails,
     *     domainId?: string,
     *     id?: string,
     *     status?: 'ASSIGNED'|'NOT_ASSIGNED'|'ACTIVATED'|'DEACTIVATED',
     *     type?: 'IAM'|'SSO'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
