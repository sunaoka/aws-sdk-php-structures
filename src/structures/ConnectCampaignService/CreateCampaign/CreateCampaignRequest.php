<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\CreateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $connectInstanceId
 * @property Shapes\DialerConfig $dialerConfig
 * @property Shapes\OutboundCallConfig $outboundCallConfig
 * @property array<string, string> $tags
 */
class CreateCampaignRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     connectInstanceId: string,
     *     dialerConfig: Shapes\DialerConfig,
     *     outboundCallConfig: Shapes\OutboundCallConfig,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
