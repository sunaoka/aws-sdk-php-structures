<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConformancePackComplianceDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConformancePackName
 * @property Shapes\ConformancePackEvaluationFilters|null $Filters
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class GetConformancePackComplianceDetailsRequest extends Request
{
    /**
     * @param array{
     *     ConformancePackName: string,
     *     Filters?: Shapes\ConformancePackEvaluationFilters|null,
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
