<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CoverageFilterCriteria|null $filterCriteria
 * @property int<1, 200>|null $maxResults
 * @property string|null $nextToken
 */
class ListCoverageRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\CoverageFilterCriteria|null,
     *     maxResults?: int<1, 200>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
