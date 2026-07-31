<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionId
 * @property string|null $description
 * @property string $resourceType
 */
class TestAction extends Shape
{
    /**
     * @param array{
     *     actionId: string,
     *     description?: string|null,
     *     resourceType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
