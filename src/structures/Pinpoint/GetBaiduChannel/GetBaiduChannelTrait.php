<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetBaiduChannel;

trait GetBaiduChannelTrait
{
    /**
     * @param GetBaiduChannelRequest $args
     * @return GetBaiduChannelResponse
     */
    public function getBaiduChannel(GetBaiduChannelRequest $args)
    {
        $result = parent::getBaiduChannel($args->toArray());
        return new GetBaiduChannelResponse($result->toArray());
    }
}
