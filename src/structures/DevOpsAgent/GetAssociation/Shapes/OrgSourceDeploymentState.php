<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $deployedAccountCount
 * @property list<OrgSourceIssue>|null $issues
 * @property \Aws\Api\DateTimeResult|null $lastEvaluatedAt
 */
class OrgSourceDeploymentState extends Shape
{
    /**
     * @param array{
     *     deployedAccountCount?: int<0, max>|null,
     *     issues?: list<OrgSourceIssue>|null,
     *     lastEvaluatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
