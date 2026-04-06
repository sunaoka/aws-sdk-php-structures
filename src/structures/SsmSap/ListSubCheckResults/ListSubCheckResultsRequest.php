<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListSubCheckResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OperationId
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSubCheckResultsRequest extends Request
{
    /**
     * @param array{
     *     OperationId: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
