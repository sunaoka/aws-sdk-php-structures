<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetHostedConfigurationVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationId
 * @property string $ConfigurationProfileId
 * @property int $VersionNumber
 * @property string $Description
 * @property string $Content
 * @property string $ContentType
 * @property string $VersionLabel
 * @property string $KmsKeyArn
 */
class GetHostedConfigurationVersionResponse extends Response
{
}
