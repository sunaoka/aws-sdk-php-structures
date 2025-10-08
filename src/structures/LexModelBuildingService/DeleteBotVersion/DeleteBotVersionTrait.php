<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteBotVersion;

trait DeleteBotVersionTrait
{
    /**
     * @param DeleteBotVersionRequest $args
     * @return void
     */
    public function deleteBotVersion(DeleteBotVersionRequest $args)
    {
        parent::deleteBotVersion($args->toArray());
    }
}
