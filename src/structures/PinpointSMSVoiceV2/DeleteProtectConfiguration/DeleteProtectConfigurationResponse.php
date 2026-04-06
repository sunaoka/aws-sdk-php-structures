<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteProtectConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProtectConfigurationArn
 * @property string $ProtectConfigurationId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property bool $AccountDefault
 * @property bool $DeletionProtectionEnabled
 */
class DeleteProtectConfigurationResponse extends Response
{
}
