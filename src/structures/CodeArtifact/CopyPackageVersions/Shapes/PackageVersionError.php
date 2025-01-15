<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CopyPackageVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALREADY_EXISTS'|'MISMATCHED_REVISION'|'MISMATCHED_STATUS'|'NOT_ALLOWED'|'NOT_FOUND'|'SKIPPED'|null $errorCode
 * @property string|null $errorMessage
 */
class PackageVersionError extends Shape
{
    /**
     * @param array{
     *     errorCode?: 'ALREADY_EXISTS'|'MISMATCHED_REVISION'|'MISMATCHED_STATUS'|'NOT_ALLOWED'|'NOT_FOUND'|'SKIPPED'|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
