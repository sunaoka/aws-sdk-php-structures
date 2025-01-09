<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetNetworkSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkSettingsArn
 */
class GetNetworkSettingsRequest extends Request
{
    /**
     * @param array{networkSettingsArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
