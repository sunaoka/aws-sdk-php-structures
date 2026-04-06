<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateHostedConfigurationVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationId
 * @property string|null $ConfigurationProfileId
 * @property int|null $VersionNumber
 * @property string|null $Description
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Content
 * @property string|null $ContentType
 * @property string|null $VersionLabel
 * @property string|null $KmsKeyArn
 */
class CreateHostedConfigurationVersionResponse extends Response
{
}
