<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListADAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssessmentId
 * @property string|null $DirectoryId
 * @property string|null $DnsName
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdateDateTime
 * @property string|null $Status
 * @property list<string>|null $CustomerDnsIps
 * @property string|null $ReportType
 */
class AssessmentSummary extends Shape
{
    /**
     * @param array{
     *     AssessmentId?: string|null,
     *     DirectoryId?: string|null,
     *     DnsName?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateDateTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: string|null,
     *     CustomerDnsIps?: list<string>|null,
     *     ReportType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
