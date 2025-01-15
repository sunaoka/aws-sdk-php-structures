<?php

namespace Sunaoka\Aws\Structures\Firehose\ListDeliveryStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10000>|null $Limit
 * @property 'DirectPut'|'KinesisStreamAsSource'|'MSKAsSource'|'DatabaseAsSource'|null $DeliveryStreamType
 * @property string|null $ExclusiveStartDeliveryStreamName
 */
class ListDeliveryStreamsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 10000>|null,
     *     DeliveryStreamType?: 'DirectPut'|'KinesisStreamAsSource'|'MSKAsSource'|'DatabaseAsSource'|null,
     *     ExclusiveStartDeliveryStreamName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
