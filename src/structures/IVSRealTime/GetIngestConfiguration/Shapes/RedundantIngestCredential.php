<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetIngestConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $participantId
 * @property string|null $streamKey
 */
class RedundantIngestCredential extends Shape
{
    /**
     * @param array{
     *     participantId?: string|null,
     *     streamKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
