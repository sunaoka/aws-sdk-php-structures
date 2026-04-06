<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListSubCheckRuleResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubCheckResultId
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSubCheckRuleResultsRequest extends Request
{
    /**
     * @param array{
     *     SubCheckResultId: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
