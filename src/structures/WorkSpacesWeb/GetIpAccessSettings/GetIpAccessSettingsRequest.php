<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetIpAccessSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ipAccessSettingsArn
 */
class GetIpAccessSettingsRequest extends Request
{
    /**
     * @param array{ipAccessSettingsArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
