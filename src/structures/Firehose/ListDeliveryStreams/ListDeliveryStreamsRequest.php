<?php

namespace Sunaoka\Aws\Structures\Firehose\ListDeliveryStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10000> $Limit
 * @property 'DirectPut'|'KinesisStreamAsSource'|'MSKAsSource'|'DatabaseAsSource' $DeliveryStreamType
 * @property string $ExclusiveStartDeliveryStreamName
 */
class ListDeliveryStreamsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 10000>,
     *     DeliveryStreamType?: 'DirectPut'|'KinesisStreamAsSource'|'MSKAsSource'|'DatabaseAsSource',
     *     ExclusiveStartDeliveryStreamName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
