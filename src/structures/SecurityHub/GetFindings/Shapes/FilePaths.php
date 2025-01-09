<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilePath
 * @property string $FileName
 * @property string $ResourceId
 * @property string $Hash
 */
class FilePaths extends Shape
{
    /**
     * @param array{
     *     FilePath?: string,
     *     FileName?: string,
     *     ResourceId?: string,
     *     Hash?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
