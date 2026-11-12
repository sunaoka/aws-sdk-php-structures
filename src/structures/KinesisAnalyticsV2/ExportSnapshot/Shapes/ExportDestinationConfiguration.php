<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ExportSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3' $DestinationType
 * @property string $ExportRoleArn
 * @property SnapshotEncryptionConfiguration|null $DestinationEncryptionConfiguration
 * @property S3PrefixLocation $DestinationS3PrefixLocation
 */
class ExportDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationType: 'S3',
     *     ExportRoleArn: string,
     *     DestinationEncryptionConfiguration?: SnapshotEncryptionConfiguration|null,
     *     DestinationS3PrefixLocation: S3PrefixLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
