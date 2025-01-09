<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Disabled
 * @property list<RealTimeAlertRule> $Rules
 */
class RealTimeAlertConfiguration extends Shape
{
    /**
     * @param array{
     *     Disabled?: bool,
     *     Rules?: list<RealTimeAlertRule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
