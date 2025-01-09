<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListAvailableManagedRuleGroupVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $LastUpdateTimestamp
 */
class ManagedRuleGroupVersion extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
