<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteUserAccessLoggingSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userAccessLoggingSettingsArn
 */
class DeleteUserAccessLoggingSettingsRequest extends Request
{
    /**
     * @param array{userAccessLoggingSettingsArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
