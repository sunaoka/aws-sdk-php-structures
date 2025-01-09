<?php

namespace Sunaoka\Aws\Structures\Athena\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SessionId
 * @property string $Description
 * @property EngineVersion $EngineVersion
 * @property string $NotebookVersion
 * @property SessionStatus $Status
 */
class SessionSummary extends Shape
{
    /**
     * @param array{
     *     SessionId?: string,
     *     Description?: string,
     *     EngineVersion?: EngineVersion,
     *     NotebookVersion?: string,
     *     Status?: SessionStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
