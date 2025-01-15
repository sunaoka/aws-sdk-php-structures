<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FilePath
 * @property string|null $FileName
 * @property string|null $ResourceId
 * @property string|null $Hash
 */
class FilePaths extends Shape
{
    /**
     * @param array{
     *     FilePath?: string|null,
     *     FileName?: string|null,
     *     ResourceId?: string|null,
     *     Hash?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
