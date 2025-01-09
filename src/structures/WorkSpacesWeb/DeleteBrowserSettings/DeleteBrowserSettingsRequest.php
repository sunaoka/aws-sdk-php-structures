<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteBrowserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $browserSettingsArn
 */
class DeleteBrowserSettingsRequest extends Request
{
    /**
     * @param array{browserSettingsArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
