<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteIpAccessSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ipAccessSettingsArn
 */
class DeleteIpAccessSettingsRequest extends Request
{
    /**
     * @param array{ipAccessSettingsArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
