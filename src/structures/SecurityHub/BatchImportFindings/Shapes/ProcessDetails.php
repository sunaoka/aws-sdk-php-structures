<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Path
 * @property int $Pid
 * @property int $ParentPid
 * @property string $LaunchedAt
 * @property string $TerminatedAt
 */
class ProcessDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Path?: string,
     *     Pid?: int,
     *     ParentPid?: int,
     *     LaunchedAt?: string,
     *     TerminatedAt?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
