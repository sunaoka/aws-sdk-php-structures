<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\SubmitFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $anomalyInstanceId
 * @property string|null $comment
 * @property string $profilingGroupName
 * @property 'Positive'|'Negative' $type
 */
class SubmitFeedbackRequest extends Request
{
    /**
     * @param array{
     *     anomalyInstanceId: string,
     *     comment?: string|null,
     *     profilingGroupName: string,
     *     type: 'Positive'|'Negative'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
