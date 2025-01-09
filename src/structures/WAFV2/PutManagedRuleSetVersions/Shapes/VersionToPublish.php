<?php

namespace Sunaoka\Aws\Structures\WAFV2\PutManagedRuleSetVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociatedRuleGroupArn
 * @property int<1, max> $ForecastedLifetime
 */
class VersionToPublish extends Shape
{
    /**
     * @param array{
     *     AssociatedRuleGroupArn?: string,
     *     ForecastedLifetime?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
