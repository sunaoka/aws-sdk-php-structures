<?php

namespace Sunaoka\Aws\Structures\KinesisVideoSignalingChannels;

class KinesisVideoSignalingChannelsClient extends \Aws\KinesisVideoSignalingChannels\KinesisVideoSignalingChannelsClient
{
    use GetIceServerConfig\GetIceServerConfigTrait;
    use SendAlexaOfferToMaster\SendAlexaOfferToMasterTrait;
}
