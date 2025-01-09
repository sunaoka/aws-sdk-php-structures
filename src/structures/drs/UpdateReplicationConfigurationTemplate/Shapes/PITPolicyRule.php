<?php

namespace Sunaoka\Aws\Structures\drs\UpdateReplicationConfigurationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property int<1, max> $interval
 * @property int<1, max> $retentionDuration
 * @property int<0, max> $ruleID
 * @property 'MINUTE'|'HOUR'|'DAY' $units
 */
class PITPolicyRule extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     interval: int<1, max>,
     *     retentionDuration: int<1, max>,
     *     ruleID?: int<0, max>,
     *     units: 'MINUTE'|'HOUR'|'DAY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
