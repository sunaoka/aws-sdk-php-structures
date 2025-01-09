<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateBaiduChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\BaiduChannelRequest $BaiduChannelRequest
 */
class UpdateBaiduChannelRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     BaiduChannelRequest: Shapes\BaiduChannelRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
