<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateCloudWatchAlarmTemplateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $Identifier
 */
class UpdateCloudWatchAlarmTemplateGroupRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
