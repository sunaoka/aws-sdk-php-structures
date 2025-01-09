<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateCommit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filePath
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK' $fileMode
 * @property string $fileContent
 * @property SourceFileSpecifier $sourceFile
 */
class PutFileEntry extends Shape
{
    /**
     * @param array{
     *     filePath: string,
     *     fileMode?: 'EXECUTABLE'|'NORMAL'|'SYMLINK',
     *     fileContent?: string,
     *     sourceFile?: SourceFileSpecifier
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
