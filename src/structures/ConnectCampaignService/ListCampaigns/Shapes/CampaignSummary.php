<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\ListCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $connectInstanceId
 * @property string $id
 * @property string $name
 */
class CampaignSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     connectInstanceId: string,
     *     id: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
