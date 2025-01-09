<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DisableMetricsCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<string> $Metrics
 */
class DisableMetricsCollectionRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     Metrics?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
