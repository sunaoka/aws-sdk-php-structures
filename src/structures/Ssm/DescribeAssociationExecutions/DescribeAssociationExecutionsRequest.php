<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociationExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property list<Shapes\AssociationExecutionFilter>|null $Filters
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeAssociationExecutionsRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     Filters?: list<Shapes\AssociationExecutionFilter>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
