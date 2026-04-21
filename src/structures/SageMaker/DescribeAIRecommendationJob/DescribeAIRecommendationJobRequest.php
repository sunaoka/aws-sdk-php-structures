<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIRecommendationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AIRecommendationJobName
 */
class DescribeAIRecommendationJobRequest extends Request
{
    /**
     * @param array{AIRecommendationJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
