<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListGitHubAccountTokenNames;

trait ListGitHubAccountTokenNamesTrait
{
    /**
     * @param ListGitHubAccountTokenNamesRequest $args
     * @return ListGitHubAccountTokenNamesResponse
     */
    public function listGitHubAccountTokenNames(ListGitHubAccountTokenNamesRequest $args)
    {
        $result = parent::listGitHubAccountTokenNames($args->toArray());
        return new ListGitHubAccountTokenNamesResponse($result->toArray());
    }
}
