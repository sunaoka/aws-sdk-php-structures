<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeResourceCollectionHealth;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CloudFormationHealth> $CloudFormation
 * @property list<Shapes\ServiceHealth> $Service
 * @property string $NextToken
 * @property list<Shapes\TagHealth> $Tags
 */
class DescribeResourceCollectionHealthResponse extends Response
{
}
