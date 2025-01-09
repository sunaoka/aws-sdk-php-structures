<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetUserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userSettingsArn
 */
class GetUserSettingsRequest extends Request
{
    /**
     * @param array{userSettingsArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
