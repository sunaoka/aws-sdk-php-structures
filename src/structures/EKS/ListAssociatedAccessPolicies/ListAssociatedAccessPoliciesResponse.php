<?php

namespace Sunaoka\Aws\Structures\EKS\ListAssociatedAccessPolicies;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $clusterName
 * @property string|null $principalArn
 * @property string|null $nextToken
 * @property list<Shapes\AssociatedAccessPolicy>|null $associatedAccessPolicies
 */
class ListAssociatedAccessPoliciesResponse extends Response
{
}
