<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePackCompliance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConformancePackName
 * @property Shapes\ConformancePackComplianceFilters $Filters
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeConformancePackComplianceRequest extends Request
{
    /**
     * @param array{
     *     ConformancePackName: string,
     *     Filters?: Shapes\ConformancePackComplianceFilters,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
