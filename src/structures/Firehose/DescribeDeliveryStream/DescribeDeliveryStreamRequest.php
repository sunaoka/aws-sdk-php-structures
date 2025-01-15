<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryStreamName
 * @property int<1, 10000>|null $Limit
 * @property string|null $ExclusiveStartDestinationId
 */
class DescribeDeliveryStreamRequest extends Request
{
    /**
     * @param array{
     *     DeliveryStreamName: string,
     *     Limit?: int<1, 10000>|null,
     *     ExclusiveStartDestinationId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
