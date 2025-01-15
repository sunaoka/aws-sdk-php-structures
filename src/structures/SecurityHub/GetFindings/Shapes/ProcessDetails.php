<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Path
 * @property int|null $Pid
 * @property int|null $ParentPid
 * @property string|null $LaunchedAt
 * @property string|null $TerminatedAt
 */
class ProcessDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Path?: string|null,
     *     Pid?: int|null,
     *     ParentPid?: int|null,
     *     LaunchedAt?: string|null,
     *     TerminatedAt?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
