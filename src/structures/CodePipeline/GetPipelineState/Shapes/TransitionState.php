<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string $lastChangedBy
 * @property \Aws\Api\DateTimeResult $lastChangedAt
 * @property string $disabledReason
 */
class TransitionState extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     lastChangedBy?: string,
     *     lastChangedAt?: \Aws\Api\DateTimeResult,
     *     disabledReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
