<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteBaiduChannel;

trait DeleteBaiduChannelTrait
{
    /**
     * @param DeleteBaiduChannelRequest $args
     * @return DeleteBaiduChannelResponse
     */
    public function deleteBaiduChannel(DeleteBaiduChannelRequest $args)
    {
        $result = parent::deleteBaiduChannel($args->toArray());
        return new DeleteBaiduChannelResponse($result->toArray());
    }
}
