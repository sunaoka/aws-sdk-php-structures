<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteBotChannelAssociation;

trait DeleteBotChannelAssociationTrait
{
    /**
     * @param DeleteBotChannelAssociationRequest $args
     * @return void
     */
    public function deleteBotChannelAssociation(DeleteBotChannelAssociationRequest $args)
    {
        parent::deleteBotChannelAssociation($args->toArray());
    }
}
