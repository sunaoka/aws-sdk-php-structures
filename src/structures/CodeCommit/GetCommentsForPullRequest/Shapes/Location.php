<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentsForPullRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filePath
 * @property int $filePosition
 * @property 'BEFORE'|'AFTER' $relativeFileVersion
 */
class Location extends Shape
{
    /**
     * @param array{
     *     filePath?: string,
     *     filePosition?: int,
     *     relativeFileVersion?: 'BEFORE'|'AFTER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
