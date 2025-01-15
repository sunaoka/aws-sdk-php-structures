<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\StartCostEstimation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CostEstimationResourceCollectionFilter $ResourceCollection
 * @property string|null $ClientToken
 */
class StartCostEstimationRequest extends Request
{
    /**
     * @param array{
     *     ResourceCollection: Shapes\CostEstimationResourceCollectionFilter,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
