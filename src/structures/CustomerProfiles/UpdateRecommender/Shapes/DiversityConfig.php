<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DiversityColumn>|null $DiversityColumns
 */
class DiversityConfig extends Shape
{
    /**
     * @param array{DiversityColumns?: list<DiversityColumn>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
