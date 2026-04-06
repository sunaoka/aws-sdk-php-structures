<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCommitmentPurchaseAnalyses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SUCCEEDED'|'PROCESSING'|'FAILED'|null $AnalysisStatus
 * @property string|null $NextPageToken
 * @property int<0, max>|null $PageSize
 * @property list<string>|null $AnalysisIds
 */
class ListCommitmentPurchaseAnalysesRequest extends Request
{
    /**
     * @param array{
     *     AnalysisStatus?: 'SUCCEEDED'|'PROCESSING'|'FAILED'|null,
     *     NextPageToken?: string|null,
     *     PageSize?: int<0, max>|null,
     *     AnalysisIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
