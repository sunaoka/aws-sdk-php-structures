<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property int|null $NamespacePid
 * @property int|null $UserId
 * @property string|null $Name
 * @property int|null $Pid
 * @property string|null $Uuid
 * @property string|null $ExecutablePath
 * @property int|null $Euid
 * @property string|null $ParentUuid
 */
class LineageObject extends Shape
{
    /**
     * @param array{
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     NamespacePid?: int|null,
     *     UserId?: int|null,
     *     Name?: string|null,
     *     Pid?: int|null,
     *     Uuid?: string|null,
     *     ExecutablePath?: string|null,
     *     Euid?: int|null,
     *     ParentUuid?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
