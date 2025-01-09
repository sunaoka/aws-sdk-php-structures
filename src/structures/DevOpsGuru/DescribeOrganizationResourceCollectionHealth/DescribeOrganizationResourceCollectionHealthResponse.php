<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationResourceCollectionHealth;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CloudFormationHealth> $CloudFormation
 * @property list<Shapes\ServiceHealth> $Service
 * @property list<Shapes\AccountHealth> $Account
 * @property string $NextToken
 * @property list<Shapes\TagHealth> $Tags
 */
class DescribeOrganizationResourceCollectionHealthResponse extends Response
{
}
