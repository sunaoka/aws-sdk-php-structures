<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociationExecutionTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property string $ExecutionId
 * @property list<Shapes\AssociationExecutionTargetsFilter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeAssociationExecutionTargetsRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     ExecutionId: string,
     *     Filters?: list<Shapes\AssociationExecutionTargetsFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
