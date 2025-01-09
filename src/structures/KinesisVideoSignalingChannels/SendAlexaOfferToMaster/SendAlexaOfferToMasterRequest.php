<?php

namespace Sunaoka\Aws\Structures\KinesisVideoSignalingChannels\SendAlexaOfferToMaster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelARN
 * @property string $SenderClientId
 * @property string $MessagePayload
 */
class SendAlexaOfferToMasterRequest extends Request
{
    /**
     * @param array{
     *     ChannelARN: string,
     *     SenderClientId: string,
     *     MessagePayload: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
