<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryStreamName
 * @property int<1, 10000> $Limit
 * @property string $ExclusiveStartDestinationId
 */
class DescribeDeliveryStreamRequest extends Request
{
    /**
     * @param array{
     *     DeliveryStreamName: string,
     *     Limit?: int<1, 10000>,
     *     ExclusiveStartDestinationId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
