<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $organization
 * @property string|null $project
 */
class AzureDevOpsRepositoryResource extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     organization: string,
     *     project?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
