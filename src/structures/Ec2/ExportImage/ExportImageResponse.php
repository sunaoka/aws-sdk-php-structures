<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Description
 * @property 'VMDK'|'RAW'|'VHD' $DiskImageFormat
 * @property string $ExportImageTaskId
 * @property string $ImageId
 * @property string $RoleName
 * @property string $Progress
 * @property Shapes\ExportTaskS3Location $S3ExportLocation
 * @property string $Status
 * @property string $StatusMessage
 * @property list<Shapes\Tag> $Tags
 */
class ExportImageResponse extends Response
{
}
