<?php

namespace Sunaoka\Aws\Structures\ivschat;

class ivschatClient extends \Aws\ivschat\ivschatClient
{
    use CreateChatToken\CreateChatTokenTrait;
    use CreateLoggingConfiguration\CreateLoggingConfigurationTrait;
    use CreateRoom\CreateRoomTrait;
    use DeleteLoggingConfiguration\DeleteLoggingConfigurationTrait;
    use DeleteMessage\DeleteMessageTrait;
    use DeleteRoom\DeleteRoomTrait;
    use DisconnectUser\DisconnectUserTrait;
    use GetLoggingConfiguration\GetLoggingConfigurationTrait;
    use GetRoom\GetRoomTrait;
    use ListLoggingConfigurations\ListLoggingConfigurationsTrait;
    use ListRooms\ListRoomsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use SendEvent\SendEventTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateLoggingConfiguration\UpdateLoggingConfigurationTrait;
    use UpdateRoom\UpdateRoomTrait;
}
