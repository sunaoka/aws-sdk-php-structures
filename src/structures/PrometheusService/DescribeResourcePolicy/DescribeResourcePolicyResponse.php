<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeResourcePolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyDocument
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING' $policyStatus
 * @property string $revisionId
 */
class DescribeResourcePolicyResponse extends Response
{
}
