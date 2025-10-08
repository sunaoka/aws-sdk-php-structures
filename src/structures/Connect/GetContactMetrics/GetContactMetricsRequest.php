<?php

namespace Sunaoka\Aws\Structures\Connect\GetContactMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property list<Shapes\ContactMetricInfo> $Metrics
 */
class GetContactMetricsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     Metrics: list<Shapes\ContactMetricInfo>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
