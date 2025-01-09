<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopInferenceRecommendationsJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 */
class StopInferenceRecommendationsJobRequest extends Request
{
    /**
     * @param array{JobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
