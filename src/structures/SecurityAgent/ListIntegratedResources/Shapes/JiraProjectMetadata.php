<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $providerResourceId
 * @property string $projectKey
 * @property string $projectId
 * @property string|null $projectName
 */
class JiraProjectMetadata extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     providerResourceId: string,
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
