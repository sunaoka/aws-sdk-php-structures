<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateLiveSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<Shapes\HttpPackageConfiguration> $HttpPackageConfigurations
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LiveSourceName
 * @property string $SourceLocationName
 * @property array<string, string> $Tags
 */
class CreateLiveSourceResponse extends Response
{
}
