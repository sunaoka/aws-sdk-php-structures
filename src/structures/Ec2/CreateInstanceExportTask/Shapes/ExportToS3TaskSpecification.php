<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VMDK'|'RAW'|'VHD'|null $DiskImageFormat
 * @property 'ova'|null $ContainerFormat
 * @property string|null $S3Bucket
 * @property string|null $S3Prefix
 */
class ExportToS3TaskSpecification extends Shape
{
    /**
     * @param array{
     *     DiskImageFormat?: 'VMDK'|'RAW'|'VHD'|null,
     *     ContainerFormat?: 'ova'|null,
     *     S3Bucket?: string|null,
     *     S3Prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
