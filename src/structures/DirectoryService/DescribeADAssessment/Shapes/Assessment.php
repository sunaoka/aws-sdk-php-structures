<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeADAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssessmentId
 * @property string|null $DirectoryId
 * @property string|null $DnsName
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdateDateTime
 * @property string|null $Status
 * @property string|null $StatusCode
 * @property string|null $StatusReason
 * @property list<string>|null $CustomerDnsIps
 * @property string|null $VpcId
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 * @property list<string>|null $SelfManagedInstanceIds
 * @property string|null $ReportType
 * @property string|null $Version
 */
class Assessment extends Shape
{
    /**
     * @param array{
     *     AssessmentId?: string|null,
     *     DirectoryId?: string|null,
     *     DnsName?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateDateTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: string|null,
     *     StatusCode?: string|null,
     *     StatusReason?: string|null,
     *     CustomerDnsIps?: list<string>|null,
     *     VpcId?: string|null,
     *     SubnetIds?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     SelfManagedInstanceIds?: list<string>|null,
     *     ReportType?: string|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
