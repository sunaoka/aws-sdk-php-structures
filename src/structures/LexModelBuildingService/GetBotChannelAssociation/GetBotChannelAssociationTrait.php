<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotChannelAssociation;

trait GetBotChannelAssociationTrait
{
    /**
     * @param GetBotChannelAssociationRequest $args
     * @return GetBotChannelAssociationResponse
     */
    public function getBotChannelAssociation(GetBotChannelAssociationRequest $args)
    {
        $result = parent::getBotChannelAssociation($args->toArray());
        return new GetBotChannelAssociationResponse($result->toArray());
    }
}
