<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutProfileOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clientToken
 * @property string|null $id
 * @property 'UnknownError'|'ResourceNotFound'|'Conflict'|'RequestThrottled'|'InvalidInput'|null $failureCode
 */
class FailedProfileOutboundRequest extends Shape
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     id?: string|null,
     *     failureCode?: 'UnknownError'|'ResourceNotFound'|'Conflict'|'RequestThrottled'|'InvalidInput'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
