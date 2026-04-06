<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListAuditFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $KeyAttributes
 * @property list<AuditorResult>|null $AuditorResults
 * @property string|null $Operation
 * @property MetricGraph|null $MetricGraph
 * @property DependencyGraph|null $DependencyGraph
 * @property string|null $Type
 */
class AuditFinding extends Shape
{
    /**
     * @param array{
     *     KeyAttributes: array<string, string>,
     *     AuditorResults?: list<AuditorResult>|null,
     *     Operation?: string|null,
     *     MetricGraph?: MetricGraph|null,
     *     DependencyGraph?: DependencyGraph|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
