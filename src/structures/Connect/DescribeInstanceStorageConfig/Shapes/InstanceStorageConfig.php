<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeInstanceStorageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property 'S3'|'KINESIS_VIDEO_STREAM'|'KINESIS_STREAM'|'KINESIS_FIREHOSE' $StorageType
 * @property S3Config $S3Config
 * @property KinesisVideoStreamConfig $KinesisVideoStreamConfig
 * @property KinesisStreamConfig $KinesisStreamConfig
 * @property KinesisFirehoseConfig $KinesisFirehoseConfig
 */
class InstanceStorageConfig extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     StorageType: 'S3'|'KINESIS_VIDEO_STREAM'|'KINESIS_STREAM'|'KINESIS_FIREHOSE',
     *     S3Config?: S3Config,
     *     KinesisVideoStreamConfig?: KinesisVideoStreamConfig,
     *     KinesisStreamConfig?: KinesisStreamConfig,
     *     KinesisFirehoseConfig?: KinesisFirehoseConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
