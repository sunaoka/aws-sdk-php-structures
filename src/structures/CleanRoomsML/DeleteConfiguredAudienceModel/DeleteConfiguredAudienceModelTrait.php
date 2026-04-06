<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteConfiguredAudienceModel;

trait DeleteConfiguredAudienceModelTrait
{
    /**
     * @param DeleteConfiguredAudienceModelRequest $args
     * @return void
     */
    public function deleteConfiguredAudienceModel(DeleteConfiguredAudienceModelRequest $args)
    {
        parent::deleteConfiguredAudienceModel($args->toArray());
    }
}
