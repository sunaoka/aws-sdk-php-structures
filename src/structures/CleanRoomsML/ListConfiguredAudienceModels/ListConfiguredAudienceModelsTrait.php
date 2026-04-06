<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListConfiguredAudienceModels;

trait ListConfiguredAudienceModelsTrait
{
    /**
     * @param ListConfiguredAudienceModelsRequest $args
     * @return ListConfiguredAudienceModelsResponse
     */
    public function listConfiguredAudienceModels(ListConfiguredAudienceModelsRequest $args)
    {
        $result = parent::listConfiguredAudienceModels($args->toArray());
        return new ListConfiguredAudienceModelsResponse($result->toArray());
    }
}
