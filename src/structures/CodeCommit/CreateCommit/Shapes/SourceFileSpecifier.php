<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateCommit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filePath
 * @property bool $isMove
 */
class SourceFileSpecifier extends Shape
{
    /**
     * @param array{
     *     filePath: string,
     *     isMove?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
