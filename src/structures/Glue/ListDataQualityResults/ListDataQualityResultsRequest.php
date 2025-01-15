<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataQualityResultFilterCriteria|null $Filter
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListDataQualityResultsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DataQualityResultFilterCriteria|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
