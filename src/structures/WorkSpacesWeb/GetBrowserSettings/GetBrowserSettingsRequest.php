<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetBrowserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $browserSettingsArn
 */
class GetBrowserSettingsRequest extends Request
{
    /**
     * @param array{browserSettingsArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
