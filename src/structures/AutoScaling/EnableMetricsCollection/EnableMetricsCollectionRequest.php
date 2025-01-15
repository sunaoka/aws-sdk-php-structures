<?php

namespace Sunaoka\Aws\Structures\AutoScaling\EnableMetricsCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<string>|null $Metrics
 * @property string $Granularity
 */
class EnableMetricsCollectionRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     Metrics?: list<string>|null,
     *     Granularity: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
