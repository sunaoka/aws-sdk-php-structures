<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConformancePackComplianceDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConformancePackName
 * @property Shapes\ConformancePackEvaluationFilters $Filters
 * @property int $Limit
 * @property string $NextToken
 */
class GetConformancePackComplianceDetailsRequest extends Request
{
    /**
     * @param array{
     *     ConformancePackName: string,
     *     Filters?: Shapes\ConformancePackEvaluationFilters,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
