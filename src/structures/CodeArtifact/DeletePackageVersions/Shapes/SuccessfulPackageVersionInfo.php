<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeletePackageVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $revision
 * @property 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted'|null $status
 */
class SuccessfulPackageVersionInfo extends Shape
{
    /**
     * @param array{
     *     revision?: string|null,
     *     status?: 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
