<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'FAILED'|'PENDING'|null $Status
 * @property string|null $StatusReason
 * @property string|null $OutputUri
 */
class ExportFilesMetadata extends Shape
{
    /**
     * @param array{
     *     Status?: 'SUCCEEDED'|'FAILED'|'PENDING'|null,
     *     StatusReason?: string|null,
     *     OutputUri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
