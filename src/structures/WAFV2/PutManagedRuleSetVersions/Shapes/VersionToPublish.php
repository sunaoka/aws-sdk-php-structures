<?php

namespace Sunaoka\Aws\Structures\WAFV2\PutManagedRuleSetVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociatedRuleGroupArn
 * @property int<1, max>|null $ForecastedLifetime
 */
class VersionToPublish extends Shape
{
    /**
     * @param array{
     *     AssociatedRuleGroupArn?: string|null,
     *     ForecastedLifetime?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
