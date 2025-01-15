<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutProfileOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clientToken
 * @property string|null $id
 */
class SuccessfulProfileOutboundRequest extends Shape
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
