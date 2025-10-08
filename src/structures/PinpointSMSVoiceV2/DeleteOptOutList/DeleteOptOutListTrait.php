<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteOptOutList;

trait DeleteOptOutListTrait
{
    /**
     * @param DeleteOptOutListRequest $args
     * @return DeleteOptOutListResponse
     */
    public function deleteOptOutList(DeleteOptOutListRequest $args)
    {
        $result = parent::deleteOptOutList($args->toArray());
        return new DeleteOptOutListResponse($result->toArray());
    }
}
