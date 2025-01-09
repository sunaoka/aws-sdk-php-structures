<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property int $NamespacePid
 * @property int $UserId
 * @property string $Name
 * @property int $Pid
 * @property string $Uuid
 * @property string $ExecutablePath
 * @property int $Euid
 * @property string $ParentUuid
 */
class LineageObject extends Shape
{
    /**
     * @param array{
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     NamespacePid?: int,
     *     UserId?: int,
     *     Name?: string,
     *     Pid?: int,
     *     Uuid?: string,
     *     ExecutablePath?: string,
     *     Euid?: int,
     *     ParentUuid?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
