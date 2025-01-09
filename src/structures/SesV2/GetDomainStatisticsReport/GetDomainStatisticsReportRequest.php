<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDomainStatisticsReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 */
class GetDomainStatisticsReportRequest extends Request
{
    /**
     * @param array{
     *     Domain: string,
     *     StartDate: \Aws\Api\DateTimeResult,
     *     EndDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
