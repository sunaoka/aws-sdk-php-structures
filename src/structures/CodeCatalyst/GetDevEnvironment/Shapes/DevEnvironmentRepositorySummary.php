<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetDevEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property string $branchName
 */
class DevEnvironmentRepositorySummary extends Shape
{
    /**
     * @param array{
     *     repositoryName: string,
     *     branchName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
