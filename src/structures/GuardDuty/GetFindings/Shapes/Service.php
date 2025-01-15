<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Action|null $Action
 * @property Evidence|null $Evidence
 * @property bool|null $Archived
 * @property int|null $Count
 * @property string|null $DetectorId
 * @property string|null $EventFirstSeen
 * @property string|null $EventLastSeen
 * @property string|null $ResourceRole
 * @property string|null $ServiceName
 * @property string|null $UserFeedback
 * @property ServiceAdditionalInfo|null $AdditionalInfo
 * @property string|null $FeatureName
 * @property EbsVolumeScanDetails|null $EbsVolumeScanDetails
 * @property RuntimeDetails|null $RuntimeDetails
 * @property Detection|null $Detection
 * @property MalwareScanDetails|null $MalwareScanDetails
 */
class Service extends Shape
{
    /**
     * @param array{
     *     Action?: Action|null,
     *     Evidence?: Evidence|null,
     *     Archived?: bool|null,
     *     Count?: int|null,
     *     DetectorId?: string|null,
     *     EventFirstSeen?: string|null,
     *     EventLastSeen?: string|null,
     *     ResourceRole?: string|null,
     *     ServiceName?: string|null,
     *     UserFeedback?: string|null,
     *     AdditionalInfo?: ServiceAdditionalInfo|null,
     *     FeatureName?: string|null,
     *     EbsVolumeScanDetails?: EbsVolumeScanDetails|null,
     *     RuntimeDetails?: RuntimeDetails|null,
     *     Detection?: Detection|null,
     *     MalwareScanDetails?: MalwareScanDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
