<?php

namespace Sunaoka\Aws\Structures\Iot\ListPackageVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $packageName
 * @property string|null $versionName
 * @property 'DRAFT'|'PUBLISHED'|'DEPRECATED'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 */
class PackageVersionSummary extends Shape
{
    /**
     * @param array{
     *     packageName?: string|null,
     *     versionName?: string|null,
     *     status?: 'DRAFT'|'PUBLISHED'|'DEPRECATED'|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
