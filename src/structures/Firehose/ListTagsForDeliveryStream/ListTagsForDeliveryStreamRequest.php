<?php

namespace Sunaoka\Aws\Structures\Firehose\ListTagsForDeliveryStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryStreamName
 * @property string $ExclusiveStartTagKey
 * @property int<1, 50> $Limit
 */
class ListTagsForDeliveryStreamRequest extends Request
{
    /**
     * @param array{
     *     DeliveryStreamName: string,
     *     ExclusiveStartTagKey?: string,
     *     Limit?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
