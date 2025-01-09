<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAccessPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'USER'|'GROUP'|'IAM' $identityType
 * @property string $identityId
 * @property 'PORTAL'|'PROJECT' $resourceType
 * @property string $resourceId
 * @property string $iamArn
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListAccessPoliciesRequest extends Request
{
    /**
     * @param array{
     *     identityType?: 'USER'|'GROUP'|'IAM',
     *     identityId?: string,
     *     resourceType?: 'PORTAL'|'PROJECT',
     *     resourceId?: string,
     *     iamArn?: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
