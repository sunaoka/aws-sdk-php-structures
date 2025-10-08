<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotChannelAssociations;

trait GetBotChannelAssociationsTrait
{
    /**
     * @param GetBotChannelAssociationsRequest $args
     * @return GetBotChannelAssociationsResponse
     */
    public function getBotChannelAssociations(GetBotChannelAssociationsRequest $args)
    {
        $result = parent::getBotChannelAssociations($args->toArray());
        return new GetBotChannelAssociationsResponse($result->toArray());
    }
}
