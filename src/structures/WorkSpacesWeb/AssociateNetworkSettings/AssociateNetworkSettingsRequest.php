<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateNetworkSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkSettingsArn
 * @property string $portalArn
 */
class AssociateNetworkSettingsRequest extends Request
{
    /**
     * @param array{
     *     networkSettingsArn: string,
     *     portalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
