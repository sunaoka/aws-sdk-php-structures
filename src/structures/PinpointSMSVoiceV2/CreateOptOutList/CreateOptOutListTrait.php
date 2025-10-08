<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateOptOutList;

trait CreateOptOutListTrait
{
    /**
     * @param CreateOptOutListRequest $args
     * @return CreateOptOutListResponse
     */
    public function createOptOutList(CreateOptOutListRequest $args)
    {
        $result = parent::createOptOutList($args->toArray());
        return new CreateOptOutListResponse($result->toArray());
    }
}
