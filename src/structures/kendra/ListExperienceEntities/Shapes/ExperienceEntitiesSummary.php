<?php

namespace Sunaoka\Aws\Structures\kendra\ListExperienceEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EntityId
 * @property 'USER'|'GROUP' $EntityType
 * @property EntityDisplayData $DisplayData
 */
class ExperienceEntitiesSummary extends Shape
{
    /**
     * @param array{
     *     EntityId?: string,
     *     EntityType?: 'USER'|'GROUP',
     *     DisplayData?: EntityDisplayData
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
