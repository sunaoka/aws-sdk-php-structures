<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VMDK'|'RAW'|'VHD' $DiskImageFormat
 * @property 'ova' $ContainerFormat
 * @property string $S3Bucket
 * @property string $S3Prefix
 */
class ExportToS3TaskSpecification extends Shape
{
    /**
     * @param array{
     *     DiskImageFormat?: 'VMDK'|'RAW'|'VHD',
     *     ContainerFormat?: 'ova',
     *     S3Bucket?: string,
     *     S3Prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
