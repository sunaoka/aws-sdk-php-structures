<?php

namespace Sunaoka\Aws\Structures\Inspector2\SearchVulnerabilities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SearchVulnerabilitiesFilterCriteria $filterCriteria
 * @property string|null $nextToken
 */
class SearchVulnerabilitiesRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria: Shapes\SearchVulnerabilitiesFilterCriteria,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
