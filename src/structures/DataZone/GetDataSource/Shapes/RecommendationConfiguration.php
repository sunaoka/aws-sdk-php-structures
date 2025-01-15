<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enableBusinessNameGeneration
 */
class RecommendationConfiguration extends Shape
{
    /**
     * @param array{enableBusinessNameGeneration?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
