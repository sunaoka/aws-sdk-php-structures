<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateAttachedFilesConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $InstanceId
 * @property 'EMAIL'|'CHAT'|'CASE'|'TASK' $AttachmentScope
 * @property int<1, 104857600>|null $MaximumSizeLimitInBytes
 * @property Shapes\ExtensionConfiguration|null $ExtensionConfiguration
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class UpdateAttachedFilesConfigurationResponse extends Response
{
}
