<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutProfileOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientToken
 * @property string $profileId
 * @property \Aws\Api\DateTimeResult $expirationTime
 */
class ProfileOutboundRequest extends Shape
{
    /**
     * @param array{
     *     clientToken: string,
     *     profileId: string,
     *     expirationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
