<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannelBan;

trait DescribeChannelBanTrait
{
    /**
     * @param DescribeChannelBanRequest $args
     * @return DescribeChannelBanResponse
     */
    public function describeChannelBan(DescribeChannelBanRequest $args)
    {
        $result = parent::describeChannelBan($args->toArray());
        return new DescribeChannelBanResponse($result->toArray());
    }
}
