<?php

namespace Sunaoka\Aws\Structures\Wickr\DeleteDataRetentionBot;

trait DeleteDataRetentionBotTrait
{
    /**
     * @param DeleteDataRetentionBotRequest $args
     * @return DeleteDataRetentionBotResponse
     */
    public function deleteDataRetentionBot(DeleteDataRetentionBotRequest $args)
    {
        $result = parent::deleteDataRetentionBot($args->toArray());
        return new DeleteDataRetentionBotResponse($result->toArray());
    }
}
