<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\ListActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $action
 * @property string $service
 * @property string $description
 */
class ActionSummary extends Shape
{
    /**
     * @param array{
     *     action: string,
     *     service: string,
     *     description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
