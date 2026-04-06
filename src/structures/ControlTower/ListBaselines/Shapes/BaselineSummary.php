<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListBaselines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string|null $description
 */
class BaselineSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
