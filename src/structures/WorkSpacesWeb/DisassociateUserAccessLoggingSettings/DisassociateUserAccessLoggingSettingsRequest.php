<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateUserAccessLoggingSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 */
class DisassociateUserAccessLoggingSettingsRequest extends Request
{
    /**
     * @param array{portalArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
