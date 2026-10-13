<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $projectKey
 * @property string $projectId
 * @property string|null $projectName
 */
class JiraProjectResource extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     projectKey: string,
     *     projectId: string,
     *     projectName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
