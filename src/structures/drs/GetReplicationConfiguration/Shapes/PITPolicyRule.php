<?php

namespace Sunaoka\Aws\Structures\drs\GetReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property int<1, max> $interval
 * @property int<1, max> $retentionDuration
 * @property int<0, max>|null $ruleID
 * @property 'MINUTE'|'HOUR'|'DAY' $units
 */
class PITPolicyRule extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     interval: int<1, max>,
     *     retentionDuration: int<1, max>,
     *     ruleID?: int<0, max>|null,
     *     units: 'MINUTE'|'HOUR'|'DAY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
