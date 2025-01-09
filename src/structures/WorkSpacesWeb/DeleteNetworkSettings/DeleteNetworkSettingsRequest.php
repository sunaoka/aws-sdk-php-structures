<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteNetworkSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkSettingsArn
 */
class DeleteNetworkSettingsRequest extends Request
{
    /**
     * @param array{networkSettingsArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
