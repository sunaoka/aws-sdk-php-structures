<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FilePath
 * @property string|null $VolumeArn
 * @property string|null $Hash
 * @property string|null $FileName
 */
class ScanFilePath extends Shape
{
    /**
     * @param array{
     *     FilePath?: string|null,
     *     VolumeArn?: string|null,
     *     Hash?: string|null,
     *     FileName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
