<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateDataProtectionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 */
class DisassociateDataProtectionSettingsRequest extends Request
{
    /**
     * @param array{portalArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
