<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\CreateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectInstanceId
 * @property Shapes\DialerConfig $dialerConfig
 * @property string $name
 * @property Shapes\OutboundCallConfig $outboundCallConfig
 * @property array<string, string>|null $tags
 */
class CreateCampaignRequest extends Request
{
    /**
     * @param array{
     *     connectInstanceId: string,
     *     dialerConfig: Shapes\DialerConfig,
     *     name: string,
     *     outboundCallConfig: Shapes\OutboundCallConfig,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
