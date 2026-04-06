<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCommitmentPurchaseAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnalysisId
 */
class GetCommitmentPurchaseAnalysisRequest extends Request
{
    /**
     * @param array{AnalysisId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
