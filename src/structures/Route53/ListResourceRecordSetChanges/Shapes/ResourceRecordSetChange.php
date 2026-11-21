<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSetChanges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChangeId
 * @property 'CreateHostedZone'|'DeleteHostedZone'|'ChangeResourceRecordSets' $Operation
 * @property \Aws\Api\DateTimeResult $SubmittedAt
 * @property string|null $SubmittedBy
 * @property string|null $RequestId
 * @property 'CREATE'|'DELETE'|'UPSERT' $Action
 * @property ResourceRecordSet $ResourceRecordSet
 */
class ResourceRecordSetChange extends Shape
{
    /**
     * @param array{
     *     ChangeId: string,
     *     Operation: 'CreateHostedZone'|'DeleteHostedZone'|'ChangeResourceRecordSets',
     *     SubmittedAt: \Aws\Api\DateTimeResult,
     *     SubmittedBy?: string|null,
     *     RequestId?: string|null,
     *     Action: 'CREATE'|'DELETE'|'UPSERT',
     *     ResourceRecordSet: ResourceRecordSet
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
