<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationResourceCollectionHealth;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CloudFormationHealth>|null $CloudFormation
 * @property list<Shapes\ServiceHealth>|null $Service
 * @property list<Shapes\AccountHealth>|null $Account
 * @property string|null $NextToken
 * @property list<Shapes\TagHealth>|null $Tags
 */
class DescribeOrganizationResourceCollectionHealthResponse extends Response
{
}
