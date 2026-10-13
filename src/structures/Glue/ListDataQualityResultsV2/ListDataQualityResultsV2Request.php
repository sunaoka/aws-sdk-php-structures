<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityResultsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataQualityResultsV2FilterCriteria|null $Filter
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListDataQualityResultsV2Request extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DataQualityResultsV2FilterCriteria|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
