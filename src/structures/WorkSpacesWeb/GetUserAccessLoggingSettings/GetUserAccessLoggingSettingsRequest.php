<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetUserAccessLoggingSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userAccessLoggingSettingsArn
 */
class GetUserAccessLoggingSettingsRequest extends Request
{
    /**
     * @param array{userAccessLoggingSettingsArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
