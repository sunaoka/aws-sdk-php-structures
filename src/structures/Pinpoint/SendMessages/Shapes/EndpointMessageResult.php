<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address
 * @property 'SUCCESSFUL'|'THROTTLED'|'TEMPORARY_FAILURE'|'PERMANENT_FAILURE'|'UNKNOWN_FAILURE'|'OPT_OUT'|'DUPLICATE' $DeliveryStatus
 * @property string $MessageId
 * @property int $StatusCode
 * @property string $StatusMessage
 * @property string $UpdatedToken
 */
class EndpointMessageResult extends Shape
{
    /**
     * @param array{
     *     Address?: string,
     *     DeliveryStatus: 'SUCCESSFUL'|'THROTTLED'|'TEMPORARY_FAILURE'|'PERMANENT_FAILURE'|'UNKNOWN_FAILURE'|'OPT_OUT'|'DUPLICATE',
     *     MessageId?: string,
     *     StatusCode: int,
     *     StatusMessage?: string,
     *     UpdatedToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
