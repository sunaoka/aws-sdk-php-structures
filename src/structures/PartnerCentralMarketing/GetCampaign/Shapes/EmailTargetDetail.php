<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'CLEAN'|'REJECTED'|null $ScanStatus
 * @property \Aws\Api\DateTimeResult|null $AttachedAt
 * @property int|null $ValidCount
 * @property int|null $RejectedCount
 * @property int|null $DuplicateCount
 * @property string|null $FileName
 */
class EmailTargetDetail extends Shape
{
    /**
     * @param array{
     *     ScanStatus?: 'PENDING'|'CLEAN'|'REJECTED'|null,
     *     AttachedAt?: \Aws\Api\DateTimeResult|null,
     *     ValidCount?: int|null,
     *     RejectedCount?: int|null,
     *     DuplicateCount?: int|null,
     *     FileName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
