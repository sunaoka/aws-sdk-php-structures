<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $environmentId
 * @property string $id
 * @property string $name
 * @property ActionParameters $parameters
 * @property string|null $description
 */
class EnvironmentActionSummary extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     environmentId: string,
     *     id: string,
     *     name: string,
     *     parameters: ActionParameters,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
