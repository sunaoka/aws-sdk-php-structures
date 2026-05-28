<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListFailureModeAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACHIEVABLE'|'NOT_ACHIEVABLE'|null $availabilitySlo
 * @property 'ACHIEVABLE'|'NOT_ACHIEVABLE'|null $multiAzRtoRpo
 * @property 'ACHIEVABLE'|'NOT_ACHIEVABLE'|null $multiRegionRtoRpo
 */
class Achievability extends Shape
{
    /**
     * @param array{
     *     availabilitySlo?: 'ACHIEVABLE'|'NOT_ACHIEVABLE'|null,
     *     multiAzRtoRpo?: 'ACHIEVABLE'|'NOT_ACHIEVABLE'|null,
     *     multiRegionRtoRpo?: 'ACHIEVABLE'|'NOT_ACHIEVABLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
