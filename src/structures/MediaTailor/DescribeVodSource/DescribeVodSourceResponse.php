<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeVodSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AdBreakOpportunity> $AdBreakOpportunities
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<Shapes\HttpPackageConfiguration> $HttpPackageConfigurations
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $SourceLocationName
 * @property array<string, string> $Tags
 * @property string $VodSourceName
 */
class DescribeVodSourceResponse extends Response
{
}
