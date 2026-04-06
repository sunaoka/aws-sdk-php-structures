<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartResourceGroupingRecommendationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 */
class StartResourceGroupingRecommendationTaskRequest extends Request
{
    /**
     * @param array{appArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
