<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ExecutablePath
 * @property string $ExecutableSha256
 * @property int $NamespacePid
 * @property string $Pwd
 * @property int $Pid
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property string $Uuid
 * @property string $ParentUuid
 * @property string $User
 * @property int $UserId
 * @property int $Euid
 * @property list<LineageObject> $Lineage
 */
class ProcessDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ExecutablePath?: string,
     *     ExecutableSha256?: string,
     *     NamespacePid?: int,
     *     Pwd?: string,
     *     Pid?: int,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     Uuid?: string,
     *     ParentUuid?: string,
     *     User?: string,
     *     UserId?: int,
     *     Euid?: int,
     *     Lineage?: list<LineageObject>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
