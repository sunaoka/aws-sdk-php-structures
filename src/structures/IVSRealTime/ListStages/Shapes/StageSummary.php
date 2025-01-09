<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListStages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $activeSessionId
 * @property array<string, string> $tags
 */
class StageSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string,
     *     activeSessionId?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
