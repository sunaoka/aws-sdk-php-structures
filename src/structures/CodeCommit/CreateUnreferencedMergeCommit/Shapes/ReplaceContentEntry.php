<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateUnreferencedMergeCommit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filePath
 * @property 'KEEP_BASE'|'KEEP_SOURCE'|'KEEP_DESTINATION'|'USE_NEW_CONTENT' $replacementType
 * @property string|resource|\Psr\Http\Message\StreamInterface $content
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK' $fileMode
 */
class ReplaceContentEntry extends Shape
{
    /**
     * @param array{
     *     filePath: string,
     *     replacementType: 'KEEP_BASE'|'KEEP_SOURCE'|'KEEP_DESTINATION'|'USE_NEW_CONTENT',
     *     content?: string|resource|\Psr\Http\Message\StreamInterface,
     *     fileMode?: 'EXECUTABLE'|'NORMAL'|'SYMLINK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
