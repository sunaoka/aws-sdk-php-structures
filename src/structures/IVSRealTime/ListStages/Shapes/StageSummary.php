<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListStages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $name
 * @property string|null $activeSessionId
 * @property array<string, string>|null $tags
 */
class StageSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     activeSessionId?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
