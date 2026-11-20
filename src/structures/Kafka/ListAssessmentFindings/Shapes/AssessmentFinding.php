<?php

namespace Sunaoka\Aws\Structures\Kafka\ListAssessmentFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INFRASTRUCTURE'|'BROKER_CONFIGURATION'|'TOPIC_CONFIGURATION'|'CAPACITY'|'HEALTH' $Category
 * @property string $FindingId
 * @property string $Message
 * @property FindingRemediation|null $Remediation
 * @property string|null $Resource
 * @property 'ERROR'|'WARNING'|'INFO' $Severity
 */
class AssessmentFinding extends Shape
{
    /**
     * @param array{
     *     Category: 'INFRASTRUCTURE'|'BROKER_CONFIGURATION'|'TOPIC_CONFIGURATION'|'CAPACITY'|'HEALTH',
     *     FindingId: string,
     *     Message: string,
     *     Remediation?: FindingRemediation|null,
     *     Resource?: string|null,
     *     Severity: 'ERROR'|'WARNING'|'INFO'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
