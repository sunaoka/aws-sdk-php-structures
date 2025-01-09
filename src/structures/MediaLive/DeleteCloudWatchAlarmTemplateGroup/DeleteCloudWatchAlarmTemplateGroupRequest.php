<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteCloudWatchAlarmTemplateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteCloudWatchAlarmTemplateGroupRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
