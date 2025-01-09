<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientToken
 * @property string $id
 * @property 'InvalidInput'|'RequestThrottled'|'UnknownError'|'BufferLimitExceeded' $failureCode
 */
class FailedRequest extends Shape
{
    /**
     * @param array{
     *     clientToken?: string,
     *     id?: string,
     *     failureCode?: 'InvalidInput'|'RequestThrottled'|'UnknownError'|'BufferLimitExceeded'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
