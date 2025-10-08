<?php

namespace Sunaoka\Aws\Structures\SecretsManager\UpdateSecretVersionStage;

trait UpdateSecretVersionStageTrait
{
    /**
     * @param UpdateSecretVersionStageRequest $args
     * @return UpdateSecretVersionStageResponse
     */
    public function updateSecretVersionStage(UpdateSecretVersionStageRequest $args)
    {
        $result = parent::updateSecretVersionStage($args->toArray());
        return new UpdateSecretVersionStageResponse($result->toArray());
    }
}
