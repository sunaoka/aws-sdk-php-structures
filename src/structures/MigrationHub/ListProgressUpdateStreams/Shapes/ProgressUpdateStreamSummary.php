<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListProgressUpdateStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProgressUpdateStreamName
 */
class ProgressUpdateStreamSummary extends Shape
{
    /**
     * @param array{ProgressUpdateStreamName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
