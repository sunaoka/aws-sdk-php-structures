<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseAuditEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $mergeEventId
 * @property string $primaryCaseId
 * @property string $secondaryCaseId
 */
class AuditMergeMetadata extends Shape
{
    /**
     * @param array{
     *     mergeEventId: string,
     *     primaryCaseId: string,
     *     secondaryCaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
