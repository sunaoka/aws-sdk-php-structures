<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $providerResourceId
 * @property string $organization
 * @property string|null $project
 * @property string|null $projectId
 * @property 'PRIVATE'|'PUBLIC'|null $accessType
 */
class AzureDevOpsRepositoryMetadata extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     providerResourceId: string,
     *     organization: string,
     *     project?: string|null,
     *     projectId?: string|null,
     *     accessType?: 'PRIVATE'|'PUBLIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
