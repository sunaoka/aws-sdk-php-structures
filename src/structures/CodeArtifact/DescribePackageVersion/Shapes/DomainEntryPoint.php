<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DescribePackageVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property string $externalConnectionName
 */
class DomainEntryPoint extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string,
     *     externalConnectionName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
