<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateCommit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filePath
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null $fileMode
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $fileContent
 * @property SourceFileSpecifier|null $sourceFile
 */
class PutFileEntry extends Shape
{
    /**
     * @param array{
     *     filePath: string,
     *     fileMode?: 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null,
     *     fileContent?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     sourceFile?: SourceFileSpecifier|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
