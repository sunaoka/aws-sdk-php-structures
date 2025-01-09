<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCommitmentPurchaseAnalyses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SUCCEEDED'|'PROCESSING'|'FAILED' $AnalysisStatus
 * @property string $NextPageToken
 * @property int $PageSize
 * @property list<string> $AnalysisIds
 */
class ListCommitmentPurchaseAnalysesRequest extends Request
{
    /**
     * @param array{
     *     AnalysisStatus?: 'SUCCEEDED'|'PROCESSING'|'FAILED',
     *     NextPageToken?: string,
     *     PageSize?: int,
     *     AnalysisIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
