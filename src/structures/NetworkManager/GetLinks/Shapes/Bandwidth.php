<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $UploadSpeed
 * @property int $DownloadSpeed
 */
class Bandwidth extends Shape
{
    /**
     * @param array{
     *     UploadSpeed?: int,
     *     DownloadSpeed?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
