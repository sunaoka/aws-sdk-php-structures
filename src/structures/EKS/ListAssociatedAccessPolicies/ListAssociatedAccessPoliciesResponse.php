<?php

namespace Sunaoka\Aws\Structures\EKS\ListAssociatedAccessPolicies;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $clusterName
 * @property string $principalArn
 * @property string $nextToken
 * @property list<Shapes\AssociatedAccessPolicy> $associatedAccessPolicies
 */
class ListAssociatedAccessPoliciesResponse extends Response
{
}
