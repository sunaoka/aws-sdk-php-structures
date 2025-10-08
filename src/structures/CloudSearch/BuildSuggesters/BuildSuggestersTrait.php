<?php

namespace Sunaoka\Aws\Structures\CloudSearch\BuildSuggesters;

trait BuildSuggestersTrait
{
    /**
     * @param BuildSuggestersRequest $args
     * @return BuildSuggestersResponse
     */
    public function buildSuggesters(BuildSuggestersRequest $args)
    {
        $result = parent::buildSuggesters($args->toArray());
        return new BuildSuggestersResponse($result->toArray());
    }
}
