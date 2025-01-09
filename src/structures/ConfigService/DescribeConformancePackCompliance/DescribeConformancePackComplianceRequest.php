<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePackCompliance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConformancePackName
 * @property Shapes\ConformancePackComplianceFilters $Filters
 * @property int<0, 1000> $Limit
 * @property string $NextToken
 */
class DescribeConformancePackComplianceRequest extends Request
{
    /**
     * @param array{
     *     ConformancePackName: string,
     *     Filters?: Shapes\ConformancePackComplianceFilters,
     *     Limit?: int<0, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
