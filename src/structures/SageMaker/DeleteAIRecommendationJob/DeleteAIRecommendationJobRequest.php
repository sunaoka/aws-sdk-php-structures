<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteAIRecommendationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AIRecommendationJobName
 */
class DeleteAIRecommendationJobRequest extends Request
{
    /**
     * @param array{AIRecommendationJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
