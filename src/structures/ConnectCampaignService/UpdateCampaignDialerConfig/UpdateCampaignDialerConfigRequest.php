<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\UpdateCampaignDialerConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property Shapes\DialerConfig $dialerConfig
 */
class UpdateCampaignDialerConfigRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     dialerConfig: Shapes\DialerConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
