<?php

namespace Sunaoka\Aws\Structures\FIS\ListActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $description
 * @property array<string, ActionTarget>|null $targets
 * @property array<string, string>|null $tags
 */
class ActionSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     description?: string|null,
     *     targets?: array<string, ActionTarget>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
