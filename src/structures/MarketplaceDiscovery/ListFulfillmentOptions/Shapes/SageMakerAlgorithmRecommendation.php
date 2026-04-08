<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recommendedBatchTransformInstanceType
 * @property string|null $recommendedRealtimeInferenceInstanceType
 * @property string $recommendedTrainingInstanceType
 */
class SageMakerAlgorithmRecommendation extends Shape
{
    /**
     * @param array{
     *     recommendedBatchTransformInstanceType: string,
     *     recommendedRealtimeInferenceInstanceType?: string|null,
     *     recommendedTrainingInstanceType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
