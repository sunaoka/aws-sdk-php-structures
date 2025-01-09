<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 */
class ListOperationsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
