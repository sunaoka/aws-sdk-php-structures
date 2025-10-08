<?php

namespace Sunaoka\Aws\Structures\Inspector2\SearchVulnerabilities;

trait SearchVulnerabilitiesTrait
{
    /**
     * @param SearchVulnerabilitiesRequest $args
     * @return SearchVulnerabilitiesResponse
     */
    public function searchVulnerabilities(SearchVulnerabilitiesRequest $args)
    {
        $result = parent::searchVulnerabilities($args->toArray());
        return new SearchVulnerabilitiesResponse($result->toArray());
    }
}
