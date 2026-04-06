<?php

namespace Sunaoka\Aws\Structures\MediaLive\GetCloudWatchAlarmTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetCloudWatchAlarmTemplateRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
