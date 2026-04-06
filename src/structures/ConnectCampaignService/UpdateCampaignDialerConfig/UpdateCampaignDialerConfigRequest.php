<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\UpdateCampaignDialerConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DialerConfig $dialerConfig
 * @property string $id
 */
class UpdateCampaignDialerConfigRequest extends Request
{
    /**
     * @param array{
     *     dialerConfig: Shapes\DialerConfig,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
