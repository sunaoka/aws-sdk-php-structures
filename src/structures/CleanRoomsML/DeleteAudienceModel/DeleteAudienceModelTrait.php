<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteAudienceModel;

trait DeleteAudienceModelTrait
{
    /**
     * @param DeleteAudienceModelRequest $args
     * @return void
     */
    public function deleteAudienceModel(DeleteAudienceModelRequest $args)
    {
        parent::deleteAudienceModel($args->toArray());
    }
}
