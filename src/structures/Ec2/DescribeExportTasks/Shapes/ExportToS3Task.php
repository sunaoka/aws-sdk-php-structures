<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeExportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ova' $ContainerFormat
 * @property 'VMDK'|'RAW'|'VHD' $DiskImageFormat
 * @property string $S3Bucket
 * @property string $S3Key
 */
class ExportToS3Task extends Shape
{
    /**
     * @param array{
     *     ContainerFormat?: 'ova',
     *     DiskImageFormat?: 'VMDK'|'RAW'|'VHD',
     *     S3Bucket?: string,
     *     S3Key?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
