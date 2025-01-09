<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateBrowserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $browserSettingsArn
 * @property string $portalArn
 */
class AssociateBrowserSettingsRequest extends Request
{
    /**
     * @param array{
     *     browserSettingsArn: string,
     *     portalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
