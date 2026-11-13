<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property string|null $Identifier
 * @property int<0, max>|null $Count
 */
class ResourceDistribution extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     Identifier?: string|null,
     *     Count?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
