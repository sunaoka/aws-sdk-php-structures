<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListThreats\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $threatId
 * @property string|null $threatJobId
 * @property string|null $title
 * @property string|null $statement
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFO'|null $severity
 * @property 'OPEN'|'RESOLVED'|'DISMISSED'|null $status
 * @property list<'SPOOFING'|'TAMPERING'|'REPUDIATION'|'INFORMATION_DISCLOSURE'|'DENIAL_OF_SERVICE'|'ELEVATION_OF_PRIVILEGE'>|null $stride
 * @property 'CUSTOMER'|'AGENT'|null $createdBy
 * @property 'CUSTOMER'|'AGENT'|null $updatedBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ThreatSummary extends Shape
{
    /**
     * @param array{
     *     threatId?: string|null,
     *     threatJobId?: string|null,
     *     title?: string|null,
     *     statement?: string|null,
     *     severity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFO'|null,
     *     status?: 'OPEN'|'RESOLVED'|'DISMISSED'|null,
     *     stride?: list<'SPOOFING'|'TAMPERING'|'REPUDIATION'|'INFORMATION_DISCLOSURE'|'DENIAL_OF_SERVICE'|'ELEVATION_OF_PRIVILEGE'>|null,
     *     createdBy?: 'CUSTOMER'|'AGENT'|null,
     *     updatedBy?: 'CUSTOMER'|'AGENT'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
