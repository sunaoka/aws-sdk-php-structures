<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UpdatePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $timeoutMinutes
 * @property 'enable'|'disable' $action
 * @property array<string, EventSourceMapping> $regionEventSourceMappings
 * @property LambdaEventSourceMappingUngraceful|null $ungraceful
 */
class LambdaEventSourceMappingConfiguration extends Shape
{
    /**
     * @param array{
     *     timeoutMinutes?: int<1, max>|null,
     *     action: 'enable'|'disable',
     *     regionEventSourceMappings: array<string, EventSourceMapping>,
     *     ungraceful?: LambdaEventSourceMappingUngraceful|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
