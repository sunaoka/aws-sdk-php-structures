<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateBrowserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 */
class DisassociateBrowserSettingsRequest extends Request
{
    /**
     * @param array{portalArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
