<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchDisableStandards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StandardsSubscriptionArn
 * @property string $StandardsArn
 * @property array<string, string> $StandardsInput
 * @property 'PENDING'|'READY'|'FAILED'|'DELETING'|'INCOMPLETE' $StandardsStatus
 * @property 'READY_FOR_UPDATES'|'NOT_READY_FOR_UPDATES'|null $StandardsControlsUpdatable
 * @property StandardsStatusReason|null $StandardsStatusReason
 */
class StandardsSubscription extends Shape
{
    /**
     * @param array{
     *     StandardsSubscriptionArn: string,
     *     StandardsArn: string,
     *     StandardsInput: array<string, string>,
     *     StandardsStatus: 'PENDING'|'READY'|'FAILED'|'DELETING'|'INCOMPLETE',
     *     StandardsControlsUpdatable?: 'READY_FOR_UPDATES'|'NOT_READY_FOR_UPDATES'|null,
     *     StandardsStatusReason?: StandardsStatusReason|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
