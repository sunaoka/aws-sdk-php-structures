<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property string|null $revision
 * @property 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted' $status
 * @property PackageVersionOrigin|null $origin
 */
class PackageVersionSummary extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     revision?: string|null,
     *     status: 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted',
     *     origin?: PackageVersionOrigin|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
