<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotVersion;

trait DeleteBotVersionTrait
{
    /**
     * @param DeleteBotVersionRequest $args
     * @return DeleteBotVersionResponse
     */
    public function deleteBotVersion(DeleteBotVersionRequest $args)
    {
        $result = parent::deleteBotVersion($args->toArray());
        return new DeleteBotVersionResponse($result->toArray());
    }
}
