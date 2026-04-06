<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $activeSessionId
 * @property string $arn
 * @property string|null $name
 * @property array<string, string>|null $tags
 */
class Stage extends Shape
{
    /**
     * @param array{
     *     activeSessionId?: string|null,
     *     arn: string,
     *     name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
