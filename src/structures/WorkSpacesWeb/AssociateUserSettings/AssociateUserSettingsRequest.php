<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateUserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 * @property string $userSettingsArn
 */
class AssociateUserSettingsRequest extends Request
{
    /**
     * @param array{
     *     portalArn: string,
     *     userSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
