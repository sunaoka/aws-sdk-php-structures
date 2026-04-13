<?php

namespace Sunaoka\Aws\Structures\Deadline\GetMonitorSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorId
 */
class GetMonitorSettingsRequest extends Request
{
    /**
     * @param array{monitorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
