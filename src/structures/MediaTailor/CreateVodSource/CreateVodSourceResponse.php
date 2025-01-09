<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateVodSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<Shapes\HttpPackageConfiguration> $HttpPackageConfigurations
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $SourceLocationName
 * @property array<string, string> $Tags
 * @property string $VodSourceName
 */
class CreateVodSourceResponse extends Response
{
}
