<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateHostedConfigurationVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationId
 * @property string $ConfigurationProfileId
 * @property int $VersionNumber
 * @property string $Description
 * @property string|resource|\Psr\Http\Message\StreamInterface $Content
 * @property string $ContentType
 * @property string $VersionLabel
 * @property string $KmsKeyArn
 */
class CreateHostedConfigurationVersionResponse extends Response
{
}
