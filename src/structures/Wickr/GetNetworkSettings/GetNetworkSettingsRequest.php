<?php

namespace Sunaoka\Aws\Structures\Wickr\GetNetworkSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 */
class GetNetworkSettingsRequest extends Request
{
    /**
     * @param array{networkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
