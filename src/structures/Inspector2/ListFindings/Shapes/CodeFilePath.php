<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileName
 * @property string $filePath
 * @property int $startLine
 * @property int $endLine
 */
class CodeFilePath extends Shape
{
    /**
     * @param array{
     *     fileName: string,
     *     filePath: string,
     *     startLine: int,
     *     endLine: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
