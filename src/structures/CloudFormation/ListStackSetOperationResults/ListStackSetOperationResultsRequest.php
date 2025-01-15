<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperationResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string $OperationId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'SELF'|'DELEGATED_ADMIN'|null $CallAs
 * @property list<Shapes\OperationResultFilter>|null $Filters
 */
class ListStackSetOperationResultsRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     OperationId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'|null,
     *     Filters?: list<Shapes\OperationResultFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
