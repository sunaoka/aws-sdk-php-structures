<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopAIRecommendationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AIRecommendationJobName
 */
class StopAIRecommendationJobRequest extends Request
{
    /**
     * @param array{AIRecommendationJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
