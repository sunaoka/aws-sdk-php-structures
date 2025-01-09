<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 */
class DescribeInferenceRecommendationsJobRequest extends Request
{
    /**
     * @param array{JobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
