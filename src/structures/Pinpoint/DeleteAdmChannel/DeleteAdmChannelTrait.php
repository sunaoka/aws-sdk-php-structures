<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteAdmChannel;

trait DeleteAdmChannelTrait
{
    /**
     * @param DeleteAdmChannelRequest $args
     * @return DeleteAdmChannelResponse
     */
    public function deleteAdmChannel(DeleteAdmChannelRequest $args)
    {
        $result = parent::deleteAdmChannel($args->toArray());
        return new DeleteAdmChannelResponse($result->toArray());
    }
}
