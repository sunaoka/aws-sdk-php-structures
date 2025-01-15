<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Description
 * @property 'VMDK'|'RAW'|'VHD'|null $DiskImageFormat
 * @property string|null $ExportImageTaskId
 * @property string|null $ImageId
 * @property string|null $RoleName
 * @property string|null $Progress
 * @property Shapes\ExportTaskS3Location|null $S3ExportLocation
 * @property string|null $Status
 * @property string|null $StatusMessage
 * @property list<Shapes\Tag>|null $Tags
 */
class ExportImageResponse extends Response
{
}
