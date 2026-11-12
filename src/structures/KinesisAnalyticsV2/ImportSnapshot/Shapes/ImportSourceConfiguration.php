<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ImportSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3' $SourceType
 * @property string $ImportRoleArn
 * @property SnapshotEncryptionConfiguration|null $SourceEncryptionConfiguration
 * @property S3PrefixLocation $SourceS3PrefixLocation
 */
class ImportSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     SourceType: 'S3',
     *     ImportRoleArn: string,
     *     SourceEncryptionConfiguration?: SnapshotEncryptionConfiguration|null,
     *     SourceS3PrefixLocation: S3PrefixLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
