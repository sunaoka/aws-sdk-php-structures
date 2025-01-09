<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociationExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property list<Shapes\AssociationExecutionFilter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeAssociationExecutionsRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     Filters?: list<Shapes\AssociationExecutionFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
