<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property string|null $lastChangedBy
 * @property \Aws\Api\DateTimeResult|null $lastChangedAt
 * @property string|null $disabledReason
 */
class TransitionState extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     lastChangedBy?: string|null,
     *     lastChangedAt?: \Aws\Api\DateTimeResult|null,
     *     disabledReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
