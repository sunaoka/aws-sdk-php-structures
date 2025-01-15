<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorLsaAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxRecords
 * @property string|null $NextToken
 */
class DescribeFleetAdvisorLsaAnalysisRequest extends Request
{
    /**
     * @param array{
     *     MaxRecords?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
