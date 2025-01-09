<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperationResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string $OperationId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 * @property list<Shapes\OperationResultFilter> $Filters
 */
class ListStackSetOperationResultsRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     OperationId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN',
     *     Filters?: list<Shapes\OperationResultFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
