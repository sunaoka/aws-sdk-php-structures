<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceName
 * @property string $StreamName
 * @property string $StreamARN
 * @property string $MediaType
 * @property string $KmsKeyId
 * @property string $Version
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property int<0, max> $DataRetentionInHours
 */
class StreamInfo extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string,
     *     StreamName?: string,
     *     StreamARN?: string,
     *     MediaType?: string,
     *     KmsKeyId?: string,
     *     Version?: string,
     *     Status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     DataRetentionInHours?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
