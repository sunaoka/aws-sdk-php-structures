<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 */
class IssueDetectionConfiguration extends Shape
{
    /**
     * @param array{RuleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
