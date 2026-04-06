<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $connectInstanceId
 * @property DialerConfig $dialerConfig
 * @property string $id
 * @property string $name
 * @property OutboundCallConfig $outboundCallConfig
 * @property array<string, string>|null $tags
 */
class Campaign extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     connectInstanceId: string,
     *     dialerConfig: DialerConfig,
     *     id: string,
     *     name: string,
     *     outboundCallConfig: OutboundCallConfig,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
