<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZoneChangeBatches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChangeId
 * @property 'CreateHostedZone'|'DeleteHostedZone'|'ChangeResourceRecordSets' $Operation
 * @property \Aws\Api\DateTimeResult $SubmittedAt
 * @property string|null $SubmittedBy
 * @property string|null $RequestId
 * @property string|null $Comment
 * @property int<0, max> $ChangeCount
 */
class ChangeBatchSummary extends Shape
{
    /**
     * @param array{
     *     ChangeId: string,
     *     Operation: 'CreateHostedZone'|'DeleteHostedZone'|'ChangeResourceRecordSets',
     *     SubmittedAt: \Aws\Api\DateTimeResult,
     *     SubmittedBy?: string|null,
     *     RequestId?: string|null,
     *     Comment?: string|null,
     *     ChangeCount: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
