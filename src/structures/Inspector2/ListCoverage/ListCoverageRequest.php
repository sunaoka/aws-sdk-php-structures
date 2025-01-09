<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CoverageFilterCriteria $filterCriteria
 * @property int $maxResults
 * @property string $nextToken
 */
class ListCoverageRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\CoverageFilterCriteria,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
