<?php

namespace Sunaoka\Aws\Structures\PI\GetResourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'UNSUPPORTED'|'ENABLED_PENDING_REBOOT'|'DISABLED_PENDING_REBOOT'|'UNKNOWN' $Status
 */
class FeatureMetadata extends Shape
{
    /**
     * @param array{Status?: 'ENABLED'|'DISABLED'|'UNSUPPORTED'|'ENABLED_PENDING_REBOOT'|'DISABLED_PENDING_REBOOT'|'UNKNOWN'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
