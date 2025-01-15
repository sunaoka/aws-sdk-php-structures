<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Disabled
 * @property list<RealTimeAlertRule>|null $Rules
 */
class RealTimeAlertConfiguration extends Shape
{
    /**
     * @param array{
     *     Disabled?: bool|null,
     *     Rules?: list<RealTimeAlertRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
