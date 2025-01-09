<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\ListApplicationDependencies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $SemanticVersion
 */
class ApplicationDependencySummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     SemanticVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
