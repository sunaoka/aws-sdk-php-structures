<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListAudienceModels;

trait ListAudienceModelsTrait
{
    /**
     * @param ListAudienceModelsRequest $args
     * @return ListAudienceModelsResponse
     */
    public function listAudienceModels(ListAudienceModelsRequest $args)
    {
        $result = parent::listAudienceModels($args->toArray());
        return new ListAudienceModelsResponse($result->toArray());
    }
}
