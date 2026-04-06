<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateBrowserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 * @property string $browserSettingsArn
 */
class AssociateBrowserSettingsRequest extends Request
{
    /**
     * @param array{
     *     portalArn: string,
     *     browserSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
