<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleName
 * @property 'VMDK'|'RAW'|'VHD' $diskImageFormat
 * @property string $s3Bucket
 * @property string $s3Prefix
 */
class S3ExportConfiguration extends Shape
{
    /**
     * @param array{
     *     roleName: string,
     *     diskImageFormat: 'VMDK'|'RAW'|'VHD',
     *     s3Bucket: string,
     *     s3Prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
