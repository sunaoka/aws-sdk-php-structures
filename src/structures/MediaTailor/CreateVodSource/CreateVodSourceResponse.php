<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateVodSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<Shapes\HttpPackageConfiguration>|null $HttpPackageConfigurations
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $SourceLocationName
 * @property array<string, string>|null $Tags
 * @property string|null $VodSourceName
 */
class CreateVodSourceResponse extends Response
{
}
