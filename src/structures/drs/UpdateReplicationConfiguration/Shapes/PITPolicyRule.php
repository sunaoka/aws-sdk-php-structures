<?php

namespace Sunaoka\Aws\Structures\drs\UpdateReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $ruleID
 * @property 'MINUTE'|'HOUR'|'DAY' $units
 * @property int<1, max> $interval
 * @property int<1, max> $retentionDuration
 * @property bool|null $enabled
 */
class PITPolicyRule extends Shape
{
    /**
     * @param array{
     *     ruleID?: int<0, max>|null,
     *     units: 'MINUTE'|'HOUR'|'DAY',
     *     interval: int<1, max>,
     *     retentionDuration: int<1, max>,
     *     enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
