<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $source
 * @property 'CloudTrail'|'Route53Resolver'|'VPCFlow'|'EKSAudit'|'AWSWAF' $eventSource
 * @property 'V1.1' $ocsfVersion
 */
class ParseToOCSF extends Shape
{
    /**
     * @param array{
     *     source?: string|null,
     *     eventSource: 'CloudTrail'|'Route53Resolver'|'VPCFlow'|'EKSAudit'|'AWSWAF',
     *     ocsfVersion: 'V1.1'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
