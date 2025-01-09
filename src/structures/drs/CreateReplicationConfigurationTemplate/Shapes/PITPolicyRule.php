<?php

namespace Sunaoka\Aws\Structures\drs\CreateReplicationConfigurationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property int $interval
 * @property int $retentionDuration
 * @property int $ruleID
 * @property 'MINUTE'|'HOUR'|'DAY' $units
 */
class PITPolicyRule extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     interval: int,
     *     retentionDuration: int,
     *     ruleID?: int,
     *     units: 'MINUTE'|'HOUR'|'DAY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
