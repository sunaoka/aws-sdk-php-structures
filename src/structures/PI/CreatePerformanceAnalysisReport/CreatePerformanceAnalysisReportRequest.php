<?php

namespace Sunaoka\Aws\Structures\PI\CreatePerformanceAnalysisReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<Shapes\Tag>|null $Tags
 */
class CreatePerformanceAnalysisReportRequest extends Request
{
    /**
     * @param array{
     *     ServiceType: 'RDS'|'DOCDB',
     *     Identifier: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
