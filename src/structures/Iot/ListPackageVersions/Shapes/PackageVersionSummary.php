<?php

namespace Sunaoka\Aws\Structures\Iot\ListPackageVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $packageName
 * @property string $versionName
 * @property 'DRAFT'|'PUBLISHED'|'DEPRECATED' $status
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 */
class PackageVersionSummary extends Shape
{
    /**
     * @param array{
     *     packageName?: string,
     *     versionName?: string,
     *     status?: 'DRAFT'|'PUBLISHED'|'DEPRECATED',
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
