<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CopyPackageVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALREADY_EXISTS'|'MISMATCHED_REVISION'|'MISMATCHED_STATUS'|'NOT_ALLOWED'|'NOT_FOUND'|'SKIPPED' $errorCode
 * @property string $errorMessage
 */
class PackageVersionError extends Shape
{
    /**
     * @param array{
     *     errorCode?: 'ALREADY_EXISTS'|'MISMATCHED_REVISION'|'MISMATCHED_STATUS'|'NOT_ALLOWED'|'NOT_FOUND'|'SKIPPED',
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
