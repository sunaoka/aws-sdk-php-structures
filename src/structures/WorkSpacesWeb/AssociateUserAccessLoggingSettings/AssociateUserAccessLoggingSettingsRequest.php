<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateUserAccessLoggingSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 * @property string $userAccessLoggingSettingsArn
 */
class AssociateUserAccessLoggingSettingsRequest extends Request
{
    /**
     * @param array{
     *     portalArn: string,
     *     userAccessLoggingSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
