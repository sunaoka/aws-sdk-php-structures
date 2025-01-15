<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $EndLine
 * @property string|null $FileName
 * @property string|null $FilePath
 * @property int|null $StartLine
 */
class CodeVulnerabilitiesFilePath extends Shape
{
    /**
     * @param array{
     *     EndLine?: int|null,
     *     FileName?: string|null,
     *     FilePath?: string|null,
     *     StartLine?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
