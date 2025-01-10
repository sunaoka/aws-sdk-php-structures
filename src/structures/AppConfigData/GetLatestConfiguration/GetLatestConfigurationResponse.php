<?php

namespace Sunaoka\Aws\Structures\AppConfigData\GetLatestConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextPollConfigurationToken
 * @property int $NextPollIntervalInSeconds
 * @property string $ContentType
 * @property \Psr\Http\Message\StreamInterface $Configuration
 * @property string $VersionLabel
 */
class GetLatestConfigurationResponse extends Response
{
}
