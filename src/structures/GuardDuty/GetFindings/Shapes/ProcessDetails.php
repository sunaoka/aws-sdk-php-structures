<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $ExecutablePath
 * @property string|null $ExecutableSha256
 * @property int|null $NamespacePid
 * @property string|null $Pwd
 * @property int|null $Pid
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property string|null $Uuid
 * @property string|null $ParentUuid
 * @property string|null $User
 * @property int|null $UserId
 * @property int|null $Euid
 * @property list<LineageObject>|null $Lineage
 */
class ProcessDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ExecutablePath?: string|null,
     *     ExecutableSha256?: string|null,
     *     NamespacePid?: int|null,
     *     Pwd?: string|null,
     *     Pid?: int|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Uuid?: string|null,
     *     ParentUuid?: string|null,
     *     User?: string|null,
     *     UserId?: int|null,
     *     Euid?: int|null,
     *     Lineage?: list<LineageObject>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
