<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Action $Action
 * @property Evidence $Evidence
 * @property bool $Archived
 * @property int $Count
 * @property string $DetectorId
 * @property string $EventFirstSeen
 * @property string $EventLastSeen
 * @property string $ResourceRole
 * @property string $ServiceName
 * @property string $UserFeedback
 * @property ServiceAdditionalInfo $AdditionalInfo
 * @property string $FeatureName
 * @property EbsVolumeScanDetails $EbsVolumeScanDetails
 * @property RuntimeDetails $RuntimeDetails
 * @property Detection $Detection
 * @property MalwareScanDetails $MalwareScanDetails
 */
class Service extends Shape
{
    /**
     * @param array{
     *     Action?: Action,
     *     Evidence?: Evidence,
     *     Archived?: bool,
     *     Count?: int,
     *     DetectorId?: string,
     *     EventFirstSeen?: string,
     *     EventLastSeen?: string,
     *     ResourceRole?: string,
     *     ServiceName?: string,
     *     UserFeedback?: string,
     *     AdditionalInfo?: ServiceAdditionalInfo,
     *     FeatureName?: string,
     *     EbsVolumeScanDetails?: EbsVolumeScanDetails,
     *     RuntimeDetails?: RuntimeDetails,
     *     Detection?: Detection,
     *     MalwareScanDetails?: MalwareScanDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
