<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\EvaluateFeature;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $entityId
 * @property string|null $evaluationContext
 * @property string $feature
 * @property string $project
 */
class EvaluateFeatureRequest extends Request
{
    /**
     * @param array{
     *     entityId: string,
     *     evaluationContext?: string|null,
     *     feature: string,
     *     project: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
