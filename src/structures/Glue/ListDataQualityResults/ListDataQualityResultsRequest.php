<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataQualityResultFilterCriteria $Filter
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListDataQualityResultsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DataQualityResultFilterCriteria,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
