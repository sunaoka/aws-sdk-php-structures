<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\CreatePerformanceMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property string|null $scopeArn
 * @property list<Shapes\PerformanceMonitorTarget> $targets
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreatePerformanceMonitorRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     scopeArn?: string|null,
     *     targets: list<Shapes\PerformanceMonitorTarget>,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
