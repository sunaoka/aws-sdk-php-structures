<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $EndLine
 * @property string $FileName
 * @property string $FilePath
 * @property int $StartLine
 */
class CodeVulnerabilitiesFilePath extends Shape
{
    /**
     * @param array{
     *     EndLine?: int,
     *     FileName?: string,
     *     FilePath?: string,
     *     StartLine?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
