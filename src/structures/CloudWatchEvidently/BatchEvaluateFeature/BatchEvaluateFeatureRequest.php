<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\BatchEvaluateFeature;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $project
 * @property list<Shapes\EvaluationRequest> $requests
 */
class BatchEvaluateFeatureRequest extends Request
{
    /**
     * @param array{
     *     project: string,
     *     requests: list<Shapes\EvaluationRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
