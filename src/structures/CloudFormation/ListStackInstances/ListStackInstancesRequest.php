<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<Shapes\StackInstanceFilter>|null $Filters
 * @property string|null $StackInstanceAccount
 * @property string|null $StackInstanceRegion
 * @property 'SELF'|'DELEGATED_ADMIN'|null $CallAs
 */
class ListStackInstancesRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Filters?: list<Shapes\StackInstanceFilter>|null,
     *     StackInstanceAccount?: string|null,
     *     StackInstanceRegion?: string|null,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
