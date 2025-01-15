<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DescribePackageVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryName
 * @property string|null $externalConnectionName
 */
class DomainEntryPoint extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string|null,
     *     externalConnectionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
