<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetMemberDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 */
class DNSLogsConfigurationResult extends Shape
{
    /**
     * @param array{Status: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
