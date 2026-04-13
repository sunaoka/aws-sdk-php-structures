<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateMonitorSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorId
 * @property array<string, string> $settings
 */
class UpdateMonitorSettingsRequest extends Request
{
    /**
     * @param array{
     *     monitorId: string,
     *     settings: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
