<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $assessmentId
 * @property string|null $availabilitySlo
 * @property string|null $multiAzRtoRpo
 * @property string|null $multiRegionRtoRpo
 */
class ServiceAchievabilityUpdatedMetadata extends Shape
{
    /**
     * @param array{
     *     assessmentId?: string|null,
     *     availabilitySlo?: string|null,
     *     multiAzRtoRpo?: string|null,
     *     multiRegionRtoRpo?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
