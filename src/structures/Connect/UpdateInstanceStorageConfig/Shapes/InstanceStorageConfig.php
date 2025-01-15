<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateInstanceStorageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property 'S3'|'KINESIS_VIDEO_STREAM'|'KINESIS_STREAM'|'KINESIS_FIREHOSE' $StorageType
 * @property S3Config|null $S3Config
 * @property KinesisVideoStreamConfig|null $KinesisVideoStreamConfig
 * @property KinesisStreamConfig|null $KinesisStreamConfig
 * @property KinesisFirehoseConfig|null $KinesisFirehoseConfig
 */
class InstanceStorageConfig extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     StorageType: 'S3'|'KINESIS_VIDEO_STREAM'|'KINESIS_STREAM'|'KINESIS_FIREHOSE',
     *     S3Config?: S3Config|null,
     *     KinesisVideoStreamConfig?: KinesisVideoStreamConfig|null,
     *     KinesisStreamConfig?: KinesisStreamConfig|null,
     *     KinesisFirehoseConfig?: KinesisFirehoseConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
