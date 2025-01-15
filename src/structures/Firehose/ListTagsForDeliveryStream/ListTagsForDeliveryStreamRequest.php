<?php

namespace Sunaoka\Aws\Structures\Firehose\ListTagsForDeliveryStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryStreamName
 * @property string|null $ExclusiveStartTagKey
 * @property int<1, 50>|null $Limit
 */
class ListTagsForDeliveryStreamRequest extends Request
{
    /**
     * @param array{
     *     DeliveryStreamName: string,
     *     ExclusiveStartTagKey?: string|null,
     *     Limit?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
