<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\DeleteGitHubAccountToken;

trait DeleteGitHubAccountTokenTrait
{
    /**
     * @param DeleteGitHubAccountTokenRequest $args
     * @return DeleteGitHubAccountTokenResponse
     */
    public function deleteGitHubAccountToken(DeleteGitHubAccountTokenRequest $args)
    {
        $result = parent::deleteGitHubAccountToken($args->toArray());
        return new DeleteGitHubAccountTokenResponse($result->toArray());
    }
}
