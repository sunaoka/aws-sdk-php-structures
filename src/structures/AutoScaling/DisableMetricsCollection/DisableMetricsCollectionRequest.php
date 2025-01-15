<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DisableMetricsCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<string>|null $Metrics
 */
class DisableMetricsCollectionRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     Metrics?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
