<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociationExecutionTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property string $ExecutionId
 * @property list<Shapes\AssociationExecutionTargetsFilter>|null $Filters
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeAssociationExecutionTargetsRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     ExecutionId: string,
     *     Filters?: list<Shapes\AssociationExecutionTargetsFilter>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
