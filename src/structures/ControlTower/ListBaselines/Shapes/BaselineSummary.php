<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListBaselines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $description
 * @property string $name
 */
class BaselineSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     description?: string|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
