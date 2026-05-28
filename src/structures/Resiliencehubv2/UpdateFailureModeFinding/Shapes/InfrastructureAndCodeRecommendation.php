<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateFailureModeFinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $suggestedChanges
 */
class InfrastructureAndCodeRecommendation extends Shape
{
    /**
     * @param array{suggestedChanges?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
