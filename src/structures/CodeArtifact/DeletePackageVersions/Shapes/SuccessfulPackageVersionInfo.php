<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeletePackageVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $revision
 * @property 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted' $status
 */
class SuccessfulPackageVersionInfo extends Shape
{
    /**
     * @param array{
     *     revision?: string,
     *     status?: 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
