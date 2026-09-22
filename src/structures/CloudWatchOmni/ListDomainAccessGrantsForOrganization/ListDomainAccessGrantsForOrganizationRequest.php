<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListDomainAccessGrantsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $domainId
 * @property string|null $principalId
 * @property 'IDC_USER'|'IDC_GROUP'|'IAM_USER'|'IAM_ROLE'|'IAM_ROOT'|null $principalType
 * @property 'ADMIN'|null $permission
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListDomainAccessGrantsForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     domainId?: string|null,
     *     principalId?: string|null,
     *     principalType?: 'IDC_USER'|'IDC_GROUP'|'IAM_USER'|'IAM_ROLE'|'IAM_ROOT'|null,
     *     permission?: 'ADMIN'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
