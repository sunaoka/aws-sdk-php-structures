<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutProfileOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientToken
 * @property string $id
 * @property 'UnknownError'|'ResourceNotFound'|'Conflict'|'RequestThrottled'|'InvalidInput' $failureCode
 */
class FailedProfileOutboundRequest extends Shape
{
    /**
     * @param array{
     *     clientToken?: string,
     *     id?: string,
     *     failureCode?: 'UnknownError'|'ResourceNotFound'|'Conflict'|'RequestThrottled'|'InvalidInput'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
