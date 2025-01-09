<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergeBranchesByThreeWay\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filePath
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK' $fileMode
 */
class SetFileModeEntry extends Shape
{
    /**
     * @param array{
     *     filePath: string,
     *     fileMode: 'EXECUTABLE'|'NORMAL'|'SYMLINK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
