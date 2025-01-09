<?php

namespace Sunaoka\Aws\Structures\Inspector2\SearchVulnerabilities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SearchVulnerabilitiesFilterCriteria $filterCriteria
 * @property string $nextToken
 */
class SearchVulnerabilitiesRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria: Shapes\SearchVulnerabilitiesFilterCriteria,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
