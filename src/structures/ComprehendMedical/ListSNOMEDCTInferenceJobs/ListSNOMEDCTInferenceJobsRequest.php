<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\ListSNOMEDCTInferenceJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ComprehendMedicalAsyncJobFilter $Filter
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListSNOMEDCTInferenceJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\ComprehendMedicalAsyncJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
