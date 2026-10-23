<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationId
 * @property string $repository
 * @property string|null $defaultBranch
 */
class EnvironmentRepositorySource extends Shape
{
    /**
     * @param array{
     *     integrationId: string,
     *     repository: string,
     *     defaultBranch?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
