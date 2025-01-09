<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackageImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClientToken
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property Shapes\PackageImportJobInputConfig $InputConfig
 * @property string $JobId
 * @property list<Shapes\JobResourceTags> $JobTags
 * @property 'NODE_PACKAGE_VERSION'|'MARKETPLACE_NODE_PACKAGE_VERSION' $JobType
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property Shapes\PackageImportJobOutput $Output
 * @property Shapes\PackageImportJobOutputConfig $OutputConfig
 * @property 'PENDING'|'SUCCEEDED'|'FAILED' $Status
 * @property string $StatusMessage
 */
class DescribePackageImportJobResponse extends Response
{
}
