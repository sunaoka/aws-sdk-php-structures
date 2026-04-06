<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CreateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $externalConnectionName
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|null $packageFormat
 * @property 'Available'|null $status
 */
class RepositoryExternalConnectionInfo extends Shape
{
    /**
     * @param array{
     *     externalConnectionName?: string|null,
     *     packageFormat?: 'npm'|'pypi'|'maven'|'nuget'|'generic'|null,
     *     status?: 'Available'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
