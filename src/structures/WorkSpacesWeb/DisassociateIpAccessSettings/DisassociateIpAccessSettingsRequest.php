<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateIpAccessSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 */
class DisassociateIpAccessSettingsRequest extends Request
{
    /**
     * @param array{portalArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
