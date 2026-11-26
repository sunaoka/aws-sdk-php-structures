<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxyConfigurationContents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Psr\Http\Message\StreamInterface $configurationFileContents
 * @property \Psr\Http\Message\StreamInterface $configurationArchiveContents
 * @property Shapes\ConfigurationMetadata|null $configurationMetadata
 * @property string|null $customerKmsKeyArn
 */
class GetProxyConfigurationContentsResponse extends Response
{
}
