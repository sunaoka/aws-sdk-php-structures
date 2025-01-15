<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListProgressUpdateStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProgressUpdateStreamName
 */
class ProgressUpdateStreamSummary extends Shape
{
    /**
     * @param array{ProgressUpdateStreamName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
