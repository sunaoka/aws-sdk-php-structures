<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheckResourceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastCheckedTimestamp
 * @property list<Message> $Messages
 * @property 'READY'|'NOT_READY'|'UNKNOWN'|'NOT_AUTHORIZED' $Readiness
 * @property string $RuleId
 */
class RuleResult extends Shape
{
    /**
     * @param array{
     *     LastCheckedTimestamp: \Aws\Api\DateTimeResult,
     *     Messages: list<Message>,
     *     Readiness: 'READY'|'NOT_READY'|'UNKNOWN'|'NOT_AUTHORIZED',
     *     RuleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
