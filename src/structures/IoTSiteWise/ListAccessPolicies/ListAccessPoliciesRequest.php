<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAccessPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'USER'|'GROUP'|'IAM'|null $identityType
 * @property string|null $identityId
 * @property 'PORTAL'|'PROJECT'|null $resourceType
 * @property string|null $resourceId
 * @property string|null $iamArn
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListAccessPoliciesRequest extends Request
{
    /**
     * @param array{
     *     identityType?: 'USER'|'GROUP'|'IAM'|null,
     *     identityId?: string|null,
     *     resourceType?: 'PORTAL'|'PROJECT'|null,
     *     resourceId?: string|null,
     *     iamArn?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
