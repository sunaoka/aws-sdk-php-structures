<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteUserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userSettingsArn
 */
class DeleteUserSettingsRequest extends Request
{
    /**
     * @param array{userSettingsArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
