<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\GetCampaignStateBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $campaignId
 * @property 'ResourceNotFound'|'UnknownError' $failureCode
 */
class FailedCampaignStateResponse extends Shape
{
    /**
     * @param array{
     *     campaignId?: string,
     *     failureCode?: 'ResourceNotFound'|'UnknownError'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
