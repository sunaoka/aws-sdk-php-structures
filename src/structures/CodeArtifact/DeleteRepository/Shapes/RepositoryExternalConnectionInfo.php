<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeleteRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $externalConnectionName
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $packageFormat
 * @property 'Available' $status
 */
class RepositoryExternalConnectionInfo extends Shape
{
    /**
     * @param array{
     *     externalConnectionName?: string,
     *     packageFormat?: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     status?: 'Available'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
