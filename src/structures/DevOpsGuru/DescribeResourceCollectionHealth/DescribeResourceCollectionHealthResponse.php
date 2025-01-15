<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeResourceCollectionHealth;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CloudFormationHealth>|null $CloudFormation
 * @property list<Shapes\ServiceHealth>|null $Service
 * @property string|null $NextToken
 * @property list<Shapes\TagHealth>|null $Tags
 */
class DescribeResourceCollectionHealthResponse extends Response
{
}
