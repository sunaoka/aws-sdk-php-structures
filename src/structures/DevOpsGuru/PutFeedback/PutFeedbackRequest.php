<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\PutFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InsightFeedback|null $InsightFeedback
 */
class PutFeedbackRequest extends Request
{
    /**
     * @param array{InsightFeedback?: Shapes\InsightFeedback|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
