<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentsForComparedCommit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $filePath
 * @property int|null $filePosition
 * @property 'BEFORE'|'AFTER'|null $relativeFileVersion
 */
class Location extends Shape
{
    /**
     * @param array{
     *     filePath?: string|null,
     *     filePosition?: int|null,
     *     relativeFileVersion?: 'BEFORE'|'AFTER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
