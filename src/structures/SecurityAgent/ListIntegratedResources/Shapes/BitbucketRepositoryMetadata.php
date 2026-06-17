<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $providerResourceId
 * @property string $workspace
 * @property 'PRIVATE'|'PUBLIC'|null $accessType
 */
class BitbucketRepositoryMetadata extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     providerResourceId: string,
     *     workspace: string,
     *     accessType?: 'PRIVATE'|'PUBLIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
