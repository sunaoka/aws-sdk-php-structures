<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateNetworkSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 * @property string $networkSettingsArn
 */
class AssociateNetworkSettingsRequest extends Request
{
    /**
     * @param array{
     *     portalArn: string,
     *     networkSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
