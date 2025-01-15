<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeExportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ova'|null $ContainerFormat
 * @property 'VMDK'|'RAW'|'VHD'|null $DiskImageFormat
 * @property string|null $S3Bucket
 * @property string|null $S3Key
 */
class ExportToS3Task extends Shape
{
    /**
     * @param array{
     *     ContainerFormat?: 'ova'|null,
     *     DiskImageFormat?: 'VMDK'|'RAW'|'VHD'|null,
     *     S3Bucket?: string|null,
     *     S3Key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
