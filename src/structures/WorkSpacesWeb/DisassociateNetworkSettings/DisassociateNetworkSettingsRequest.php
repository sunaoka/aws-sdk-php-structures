<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateNetworkSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 */
class DisassociateNetworkSettingsRequest extends Request
{
    /**
     * @param array{portalArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
