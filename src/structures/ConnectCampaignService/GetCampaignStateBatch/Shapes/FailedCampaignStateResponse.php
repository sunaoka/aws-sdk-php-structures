<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\GetCampaignStateBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $campaignId
 * @property 'ResourceNotFound'|'UnknownError'|null $failureCode
 */
class FailedCampaignStateResponse extends Shape
{
    /**
     * @param array{
     *     campaignId?: string|null,
     *     failureCode?: 'ResourceNotFound'|'UnknownError'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
