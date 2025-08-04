<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 200>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\CoverageFilterCriteria|null $filterCriteria
 */
class ListCoverageRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 200>|null,
     *     nextToken?: string|null,
     *     filterCriteria?: Shapes\CoverageFilterCriteria|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
