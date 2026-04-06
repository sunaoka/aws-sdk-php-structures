<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateIpAccessSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ipAccessSettingsArn
 * @property string $portalArn
 */
class AssociateIpAccessSettingsRequest extends Request
{
    /**
     * @param array{
     *     ipAccessSettingsArn: string,
     *     portalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
