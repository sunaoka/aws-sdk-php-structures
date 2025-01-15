<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string|null $OrganizationId
 * @property string|null $UserIds
 * @property string|null $Query
 * @property 'ALL'|'ACTIVE_PENDING'|null $Include
 * @property 'ASCENDING'|'DESCENDING'|null $Order
 * @property 'USER_NAME'|'FULL_NAME'|'STORAGE_LIMIT'|'USER_STATUS'|'STORAGE_USED'|null $Sort
 * @property string|null $Marker
 * @property int<1, 999>|null $Limit
 * @property string|null $Fields
 */
class DescribeUsersRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     OrganizationId?: string|null,
     *     UserIds?: string|null,
     *     Query?: string|null,
     *     Include?: 'ALL'|'ACTIVE_PENDING'|null,
     *     Order?: 'ASCENDING'|'DESCENDING'|null,
     *     Sort?: 'USER_NAME'|'FULL_NAME'|'STORAGE_LIMIT'|'USER_STATUS'|'STORAGE_USED'|null,
     *     Marker?: string|null,
     *     Limit?: int<1, 999>|null,
     *     Fields?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
