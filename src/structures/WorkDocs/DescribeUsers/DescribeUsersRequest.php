<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $OrganizationId
 * @property string $UserIds
 * @property string $Query
 * @property 'ALL'|'ACTIVE_PENDING' $Include
 * @property 'ASCENDING'|'DESCENDING' $Order
 * @property 'USER_NAME'|'FULL_NAME'|'STORAGE_LIMIT'|'USER_STATUS'|'STORAGE_USED' $Sort
 * @property string $Marker
 * @property int<1, 999> $Limit
 * @property string $Fields
 */
class DescribeUsersRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     OrganizationId?: string,
     *     UserIds?: string,
     *     Query?: string,
     *     Include?: 'ALL'|'ACTIVE_PENDING',
     *     Order?: 'ASCENDING'|'DESCENDING',
     *     Sort?: 'USER_NAME'|'FULL_NAME'|'STORAGE_LIMIT'|'USER_STATUS'|'STORAGE_USED',
     *     Marker?: string,
     *     Limit?: int<1, 999>,
     *     Fields?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
