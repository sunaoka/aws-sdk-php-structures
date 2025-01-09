<?php

namespace Sunaoka\Aws\Structures\Firehose\ListTagsForDeliveryStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryStreamName
 * @property string $ExclusiveStartTagKey
 * @property int $Limit
 */
class ListTagsForDeliveryStreamRequest extends Request
{
    /**
     * @param array{
     *     DeliveryStreamName: string,
     *     ExclusiveStartTagKey?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
