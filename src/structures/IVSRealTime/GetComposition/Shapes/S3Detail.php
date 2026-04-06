<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recordingPrefix
 */
class S3Detail extends Shape
{
    /**
     * @param array{recordingPrefix: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
