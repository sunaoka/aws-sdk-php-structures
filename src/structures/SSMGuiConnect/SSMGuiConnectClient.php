<?php

namespace Sunaoka\Aws\Structures\SSMGuiConnect;

class SSMGuiConnectClient extends \Aws\SSMGuiConnect\SSMGuiConnectClient
{
    use DeleteConnectionRecordingPreferences\DeleteConnectionRecordingPreferencesTrait;
    use GetConnectionRecordingPreferences\GetConnectionRecordingPreferencesTrait;
    use UpdateConnectionRecordingPreferences\UpdateConnectionRecordingPreferencesTrait;
}
