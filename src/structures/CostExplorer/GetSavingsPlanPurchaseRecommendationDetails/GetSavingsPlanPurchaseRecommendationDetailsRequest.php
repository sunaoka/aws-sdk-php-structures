<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlanPurchaseRecommendationDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RecommendationDetailId
 */
class GetSavingsPlanPurchaseRecommendationDetailsRequest extends Request
{
    /**
     * @param array{RecommendationDetailId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
