<?php

namespace Sunaoka\Aws\Structures\AppConfigData\GetLatestConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextPollConfigurationToken
 * @property int|null $NextPollIntervalInSeconds
 * @property string|null $ContentType
 * @property \Psr\Http\Message\StreamInterface|null $Configuration
 * @property string|null $VersionLabel
 */
class GetLatestConfigurationResponse extends Response
{
}
