<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $providerResourceId
 * @property string $namespace
 * @property 'PRIVATE'|'PUBLIC'|null $accessType
 */
class GitLabRepositoryMetadata extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     providerResourceId: string,
     *     namespace: string,
     *     accessType?: 'PRIVATE'|'PUBLIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
