<?php

namespace Sunaoka\Aws\Structures\VoiceID\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultWatchlistId
 */
class WatchlistDetails extends Shape
{
    /**
     * @param array{DefaultWatchlistId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
