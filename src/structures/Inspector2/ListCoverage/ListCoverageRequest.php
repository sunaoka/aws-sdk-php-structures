<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CoverageFilterCriteria $filterCriteria
 * @property int<1, 200> $maxResults
 * @property string $nextToken
 */
class ListCoverageRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\CoverageFilterCriteria,
     *     maxResults?: int<1, 200>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
