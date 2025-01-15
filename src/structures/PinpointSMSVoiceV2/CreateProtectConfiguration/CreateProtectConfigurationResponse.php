<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateProtectConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProtectConfigurationArn
 * @property string $ProtectConfigurationId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property bool $AccountDefault
 * @property bool $DeletionProtectionEnabled
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateProtectConfigurationResponse extends Response
{
}
