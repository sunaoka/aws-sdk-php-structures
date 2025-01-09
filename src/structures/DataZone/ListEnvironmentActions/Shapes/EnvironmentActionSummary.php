<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $domainId
 * @property string $environmentId
 * @property string $id
 * @property string $name
 * @property ActionParameters $parameters
 */
class EnvironmentActionSummary extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     domainId: string,
     *     environmentId: string,
     *     id: string,
     *     name: string,
     *     parameters: ActionParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
