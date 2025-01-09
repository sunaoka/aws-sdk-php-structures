<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 */
class ListStackSetOperationsRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
