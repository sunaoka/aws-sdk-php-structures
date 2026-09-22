<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListAccessGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $domainId
 * @property string|null $spaceId
 * @property string|null $principalId
 * @property 'IDC_USER'|'IDC_GROUP'|'IAM_USER'|'IAM_ROLE'|'IAM_ROOT'|'ACCESS_PROFILE'|'ALERT'|'AGENT'|null $principalType
 * @property 'SPACE_ADMIN'|'READ'|'READ_WRITE_DELETE'|'CUSTOM'|null $permission
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListAccessGrantsRequest extends Request
{
    /**
     * @param array{
     *     domainId?: string|null,
     *     spaceId?: string|null,
     *     principalId?: string|null,
     *     principalType?: 'IDC_USER'|'IDC_GROUP'|'IAM_USER'|'IAM_ROLE'|'IAM_ROOT'|'ACCESS_PROFILE'|'ALERT'|'AGENT'|null,
     *     permission?: 'SPACE_ADMIN'|'READ'|'READ_WRITE_DELETE'|'CUSTOM'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
