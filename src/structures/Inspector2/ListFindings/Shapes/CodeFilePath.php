<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $endLine
 * @property string $fileName
 * @property string $filePath
 * @property int $startLine
 */
class CodeFilePath extends Shape
{
    /**
     * @param array{
     *     endLine: int,
     *     fileName: string,
     *     filePath: string,
     *     startLine: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
