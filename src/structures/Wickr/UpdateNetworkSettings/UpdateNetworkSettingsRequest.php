<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateNetworkSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property Shapes\NetworkSettings $settings
 */
class UpdateNetworkSettingsRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     settings: Shapes\NetworkSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
