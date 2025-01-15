<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergePullRequestBySquash\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filePath
 * @property 'KEEP_BASE'|'KEEP_SOURCE'|'KEEP_DESTINATION'|'USE_NEW_CONTENT' $replacementType
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $content
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null $fileMode
 */
class ReplaceContentEntry extends Shape
{
    /**
     * @param array{
     *     filePath: string,
     *     replacementType: 'KEEP_BASE'|'KEEP_SOURCE'|'KEEP_DESTINATION'|'USE_NEW_CONTENT',
     *     content?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     fileMode?: 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
