<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCESSFUL'|'THROTTLED'|'TEMPORARY_FAILURE'|'PERMANENT_FAILURE'|'UNKNOWN_FAILURE'|'OPT_OUT'|'DUPLICATE' $DeliveryStatus
 * @property string|null $MessageId
 * @property int $StatusCode
 * @property string|null $StatusMessage
 * @property string|null $UpdatedToken
 */
class MessageResult extends Shape
{
    /**
     * @param array{
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
