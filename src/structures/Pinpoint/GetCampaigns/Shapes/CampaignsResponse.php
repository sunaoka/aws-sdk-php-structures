<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CampaignResponse> $Item
 * @property string $NextToken
 */
class CampaignsResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<CampaignResponse>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
