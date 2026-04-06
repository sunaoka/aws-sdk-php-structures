<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $source
 * @property 'CloudTrail'|'Route53Resolver'|'VPCFlow'|'EKSAudit'|'AWSWAF' $eventSource
 * @property 'V1.1'|'V1.5' $ocsfVersion
 * @property string|null $mappingVersion
 */
class ParseToOCSF extends Shape
{
    /**
     * @param array{
     *     source?: string|null,
     *     eventSource: 'CloudTrail'|'Route53Resolver'|'VPCFlow'|'EKSAudit'|'AWSWAF',
     *     ocsfVersion: 'V1.1'|'V1.5',
     *     mappingVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
