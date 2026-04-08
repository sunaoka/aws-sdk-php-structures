<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recommendedBatchTransformInstanceType
 * @property string|null $recommendedRealtimeInferenceInstanceType
 */
class SageMakerModelRecommendation extends Shape
{
    /**
     * @param array{
     *     recommendedBatchTransformInstanceType: string,
     *     recommendedRealtimeInferenceInstanceType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
