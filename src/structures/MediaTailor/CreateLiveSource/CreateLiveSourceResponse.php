<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateLiveSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<Shapes\HttpPackageConfiguration>|null $HttpPackageConfigurations
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LiveSourceName
 * @property string|null $SourceLocationName
 * @property array<string, string>|null $Tags
 */
class CreateLiveSourceResponse extends Response
{
}
