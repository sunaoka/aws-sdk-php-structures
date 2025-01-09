<?php

namespace Sunaoka\Aws\Structures\CostExplorer\StartCommitmentPurchaseAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CommitmentPurchaseAnalysisConfiguration $CommitmentPurchaseAnalysisConfiguration
 */
class StartCommitmentPurchaseAnalysisRequest extends Request
{
    /**
     * @param array{CommitmentPurchaseAnalysisConfiguration: Shapes\CommitmentPurchaseAnalysisConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
