<?php

namespace Sunaoka\Aws\Structures\Athena\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SessionId
 * @property string|null $Description
 * @property EngineVersion|null $EngineVersion
 * @property string|null $NotebookVersion
 * @property SessionStatus|null $Status
 */
class SessionSummary extends Shape
{
    /**
     * @param array{
     *     SessionId?: string|null,
     *     Description?: string|null,
     *     EngineVersion?: EngineVersion|null,
     *     NotebookVersion?: string|null,
     *     Status?: SessionStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
