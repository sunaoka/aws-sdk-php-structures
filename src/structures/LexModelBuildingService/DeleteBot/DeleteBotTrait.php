<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteBot;

trait DeleteBotTrait
{
    /**
     * @param DeleteBotRequest $args
     * @return void
     */
    public function deleteBot(DeleteBotRequest $args)
    {
        parent::deleteBot($args->toArray());
    }
}
