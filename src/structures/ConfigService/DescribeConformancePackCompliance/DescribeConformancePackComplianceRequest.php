<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePackCompliance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConformancePackName
 * @property Shapes\ConformancePackComplianceFilters|null $Filters
 * @property int<0, 1000>|null $Limit
 * @property string|null $NextToken
 */
class DescribeConformancePackComplianceRequest extends Request
{
    /**
     * @param array{
     *     ConformancePackName: string,
     *     Filters?: Shapes\ConformancePackComplianceFilters|null,
     *     Limit?: int<0, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
