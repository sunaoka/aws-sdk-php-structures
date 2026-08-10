<?php

namespace Sunaoka\Aws\Structures\ElementalInference\SearchFixtures;

trait SearchFixturesTrait
{
    /**
     * @param SearchFixturesRequest $args
     * @return SearchFixturesResponse
     */
    public function searchFixtures(SearchFixturesRequest $args)
    {
        $result = parent::searchFixtures($args->toArray());
        return new SearchFixturesResponse($result->toArray());
    }
}
