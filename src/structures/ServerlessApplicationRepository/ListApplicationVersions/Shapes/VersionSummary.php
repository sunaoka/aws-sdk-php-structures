<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\ListApplicationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $CreationTime
 * @property string $SemanticVersion
 * @property string $SourceCodeUrl
 */
class VersionSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CreationTime: string,
     *     SemanticVersion: string,
     *     SourceCodeUrl?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
