<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightId
 */
class DescribeFeedbackRequest extends Request
{
    /**
     * @param array{InsightId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
