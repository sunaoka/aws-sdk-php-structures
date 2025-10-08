<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateBaiduChannel;

trait UpdateBaiduChannelTrait
{
    /**
     * @param UpdateBaiduChannelRequest $args
     * @return UpdateBaiduChannelResponse
     */
    public function updateBaiduChannel(UpdateBaiduChannelRequest $args)
    {
        $result = parent::updateBaiduChannel($args->toArray());
        return new UpdateBaiduChannelResponse($result->toArray());
    }
}
