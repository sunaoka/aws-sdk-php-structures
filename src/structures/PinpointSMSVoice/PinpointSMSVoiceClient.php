<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice;

class PinpointSMSVoiceClient extends \Aws\PinpointSMSVoice\PinpointSMSVoiceClient
{
    use CreateConfigurationSet\CreateConfigurationSetTrait;
    use CreateConfigurationSetEventDestination\CreateConfigurationSetEventDestinationTrait;
    use DeleteConfigurationSet\DeleteConfigurationSetTrait;
    use DeleteConfigurationSetEventDestination\DeleteConfigurationSetEventDestinationTrait;
    use GetConfigurationSetEventDestinations\GetConfigurationSetEventDestinationsTrait;
    use ListConfigurationSets\ListConfigurationSetsTrait;
    use SendVoiceMessage\SendVoiceMessageTrait;
    use UpdateConfigurationSetEventDestination\UpdateConfigurationSetEventDestinationTrait;
}
