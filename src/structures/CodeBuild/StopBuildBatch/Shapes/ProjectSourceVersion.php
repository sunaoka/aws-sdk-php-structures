<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceIdentifier
 * @property string $sourceVersion
 */
class ProjectSourceVersion extends Shape
{
    /**
     * @param array{
     *     sourceIdentifier: string,
     *     sourceVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
