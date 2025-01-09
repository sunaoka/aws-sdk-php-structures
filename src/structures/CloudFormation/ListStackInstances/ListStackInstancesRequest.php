<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property list<Shapes\StackInstanceFilter> $Filters
 * @property string $StackInstanceAccount
 * @property string $StackInstanceRegion
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 */
class ListStackInstancesRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     Filters?: list<Shapes\StackInstanceFilter>,
     *     StackInstanceAccount?: string,
     *     StackInstanceRegion?: string,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
