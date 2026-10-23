<?php

namespace Sunaoka\Aws\Structures\Continuum\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EnvironmentS3IntegrationSource>|null $s3Sources
 * @property list<EnvironmentRepositorySource>|null $repositorySources
 */
class EnvironmentSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     s3Sources?: list<EnvironmentS3IntegrationSource>|null,
     *     repositorySources?: list<EnvironmentRepositorySource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
