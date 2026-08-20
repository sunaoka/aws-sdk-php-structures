<?php

namespace Sunaoka\Aws\Structures\SesV2\SendBulkEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $OpenTrackingEnabled
 * @property 'ENABLED'|'DISABLED'|null $ClickTrackingEnabled
 */
class TrackingConfigurationOverrides extends Shape
{
    /**
     * @param array{
     *     OpenTrackingEnabled?: 'ENABLED'|'DISABLED'|null,
     *     ClickTrackingEnabled?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
