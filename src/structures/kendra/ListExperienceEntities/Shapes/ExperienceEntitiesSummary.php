<?php

namespace Sunaoka\Aws\Structures\kendra\ListExperienceEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EntityId
 * @property 'USER'|'GROUP'|null $EntityType
 * @property EntityDisplayData|null $DisplayData
 */
class ExperienceEntitiesSummary extends Shape
{
    /**
     * @param array{
     *     EntityId?: string|null,
     *     EntityType?: 'USER'|'GROUP'|null,
     *     DisplayData?: EntityDisplayData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
