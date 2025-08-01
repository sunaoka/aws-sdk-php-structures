<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateIpAccessSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 * @property string $ipAccessSettingsArn
 */
class AssociateIpAccessSettingsRequest extends Request
{
    /**
     * @param array{
     *     portalArn: string,
     *     ipAccessSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
