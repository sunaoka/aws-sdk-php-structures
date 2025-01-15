<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceName
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property string|null $MediaType
 * @property string|null $KmsKeyId
 * @property string|null $Version
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property int<0, max>|null $DataRetentionInHours
 */
class StreamInfo extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
     *     MediaType?: string|null,
     *     KmsKeyId?: string|null,
     *     Version?: string|null,
     *     Status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     DataRetentionInHours?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
