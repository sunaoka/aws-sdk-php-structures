<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetFailureModeFinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $suggestedChanges
 */
class TestingRecommendation extends Shape
{
    /**
     * @param array{suggestedChanges?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
