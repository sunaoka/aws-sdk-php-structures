<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilePath
 * @property string $VolumeArn
 * @property string $Hash
 * @property string $FileName
 */
class ScanFilePath extends Shape
{
    /**
     * @param array{
     *     FilePath?: string,
     *     VolumeArn?: string,
     *     Hash?: string,
     *     FileName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
