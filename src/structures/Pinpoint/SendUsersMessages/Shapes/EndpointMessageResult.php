<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Address
 * @property 'SUCCESSFUL'|'THROTTLED'|'TEMPORARY_FAILURE'|'PERMANENT_FAILURE'|'UNKNOWN_FAILURE'|'OPT_OUT'|'DUPLICATE' $DeliveryStatus
 * @property string|null $MessageId
 * @property int $StatusCode
 * @property string|null $StatusMessage
 * @property string|null $UpdatedToken
 */
class EndpointMessageResult extends Shape
{
    /**
     * @param array{
     *     Address?: string|null,
     *     DeliveryStatus: 'SUCCESSFUL'|'THROTTLED'|'TEMPORARY_FAILURE'|'PERMANENT_FAILURE'|'UNKNOWN_FAILURE'|'OPT_OUT'|'DUPLICATE',
     *     MessageId?: string|null,
     *     StatusCode: int,
     *     StatusMessage?: string|null,
     *     UpdatedToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
