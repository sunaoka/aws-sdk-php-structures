<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListStreamSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutputUri
 * @property 'SUCCEEDED'|'FAILED'|'PENDING'|null $Status
 * @property string|null $StatusReason
 */
class ExportFilesMetadata extends Shape
{
    /**
     * @param array{
     *     OutputUri?: string|null,
     *     Status?: 'SUCCEEDED'|'FAILED'|'PENDING'|null,
     *     StatusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
